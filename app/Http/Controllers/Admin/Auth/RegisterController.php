<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\ProviderAddRequest;
use App\Models\Category;
use App\Providers\RouteServiceProvider;
use App\Services\AdminService;
use App\Services\ProviderService;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Log;
use App\Services\MembershipService;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    private $service;
    private $providerService;
    private $membershipService;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        AdminService $service,
        ProviderService $providerService,
        MembershipService $membershipService
    )
    {
        $this->service = $service;
        $this->providerService = $providerService;
        $this->membershipService = $membershipService;
    }

    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    protected function create(AdminRequest $request)
    {
        $data = $request->validated();
        try {
            $this->service->create($data);
        } catch (\Exception $e) {
           Log::debug($e->getMessage());
           return redirect()->back();
        }

        return redirect()->route('admin.index');
    }

    public function createProvider()
    {
        return view('admin.provider.create_provider');
    }

    public function addNewProvider(ProviderAddRequest $request)
    {
        try {
            $attributes = $request->only([
                'email'
            ]);

            $attributes['regionCode'] = '';
            $attributes['coupon_code'] = $this->membershipService->generateCouponCode();;
            // generate default category_id
            $attributes['category_id'] = Category::INDUSTRY_CATEGORY;

            if(!$this->providerService->storeProvider($attributes)) {
                throw new \Exception('Creating provider was failed');
            }
        } catch (\Exception $e) {
            \Log::debug($e->getMessage());
            return redirect()->back()->withInput($attributes);
        }

        return view('admin.provider.provider_success');
    }

    public function edit(int $id)
    {
        $admin = $this->service->findAdminById($id);
        return View('admin.auth.edit', compact('admin'));
    }
}

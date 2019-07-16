<?php

namespace App\Http\Controllers;

use App\Franchise\Core\Command\DeleteBrandCommand;
use App\Franchise\Core\Command\UpdateBrandCommand;
use App\Franchise\Core\Repository\BrandRepository;
use App\Franchise\Core\Command\CreateBrandCommand;
use App\Franchise\Eloquent\EloquentUser;
use App\Franchise\Eloquent\EloquentBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Franchise\Core\Repository\UserRepository;

class BrandController extends Controller
{
    private $brandRepository, $userRepository;

    public function __construct()
    {
        $this->brandRepository = new BrandRepository();
        $this->userRepository = new UserRepository();
    }

    public function index(Request $request)
    {
        $q = isset($request->q) ? $request->q : false;
        $orderBy = isset($request->order) ? $request->order : "ASC";
        $brands = $this->brandRepository->getByOwnerId(Session::get('id'), $q, $orderBy);
        return view('backend.owner-brand.brands.index', compact('brands', 'q', 'orderBy'));
    }

    public function create(Request $request)
    {
        return view('backend.owner-brand.brands.create');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit(Request $request, $id)
    {
        $brand = $this->brandRepository->getById($id);
        return view('backend.owner-brand.brands.edit', compact('brand'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:4',
            'phone' => 'required|min:9',
            'npwp' => 'required|min:8',
        ]);

        $command = new CreateBrandCommand(
            Session::get('id'),
            $request->name,
            $request->address,
            $request->phone,
            $request->npwp
        );
        $exec = $command->handle();
        return redirect()->route('brand.index')->with('alert-success', 'Berhasil menambahkan merk baru!');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:4',
            'phone' => 'required|min:9',
            'npwp' => 'required|min:8',
        ]);
        
        $command = new UpdateBrandCommand(
            $id,
            $request->name,
            $request->address,
            $request->phone,
            $request->npwp
        );

        $exec = $command->handle();
        return redirect()->route('brand.index')->with('alert-success', 'Berhasil merubah data merk!');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete(Request $request){
        if(!$request->id){
            return redirect()->back();
        }

        $command = new DeleteBrandCommand($request->id);
        $exec = $command->handle();
        return redirect()->route('brand.index')->with('alert-success', 'Berhasil merubah status merk!');
    }

}
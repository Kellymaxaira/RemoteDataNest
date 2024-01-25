<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //

    public function index()
    {

        $devices = Device::all();

        dd($devices);
        return view('devices.index',compact('devices'));
    }


    public function create()
    {
         return view('devices.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'required|string',
        ]);

        Device::insert($validated);

        return redirect('devices');
    }

    public function edit(string $id)
    {

        $device = Device::find($id);

        return view('devices.edit',compact('device'));

    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'required|string',
        ]);

        $device = Device::find($id)->update($validated);

        return redirect('devices');

    }
    public function destroy(string $id)
    {
        Device::find($id)->delete($id);

        return redirect('devices');
    }



}

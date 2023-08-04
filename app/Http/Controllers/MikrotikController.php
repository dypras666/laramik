<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;
use App\Lib\Paginate;

class MikrotikController extends Controller
{
    private $client;
    public function __construct()
    {
        $this->client = new Client([
            'host' => config('mikrotik.mikrotik_ip'),
            'user' => config('mikrotik.mikrotik_user'),
            'pass' => config('mikrotik.mikrotik_pass'),
            'port' => config('mikrotik.mikrotik_port'),
        ]);
    }

    function user()
    {
        $query =  (new Query('/ip/hotspot/user/getall'));
        $array = $this->client->query($query)->read();
        $data = Paginate::paginate($array, 5)->setPath(url('mikrotik/user'));
        return view('mikrotik.user-hotspot', [
            'title' => 'Mikrotik User',
            'data' => $data
        ]);
    }
    function dhcp_leases()
    {
        $query =  (new Query('/ip/dhcp-server/lease/print'));
        $array = $this->client->query($query)->read();
        array_multisort($array, SORT_DESC);
        $data = Paginate::paginate($array, 5)->setPath(url('mikrotik/dhcp_leases'));
        return view('mikrotik.dhcp-leases', [
            'title' => 'Mikrotik dhcp',
            'data' => $data
        ]);
    }
    function log()
    {
        $query =  (new Query('/log/print'));
        $array = $this->client->query($query)->read();
        array_multisort($array, SORT_DESC);
        $data = Paginate::paginate($array, 10)->setPath(url('mikrotik/log'));
        return view('mikrotik.log', [
            'title' => 'Mikrotik Log',
            'data' => $data
        ]);
    }
    function hotspot_profile()
    {
        $query =  (new Query('/ip/hotspot/user/profile/print'));
        $array = $this->client->query($query)->read();
        array_multisort($array, SORT_DESC);
        $data = Paginate::paginate($array, 10)->setPath(url('mikrotik/hotspot_profile'));
        return view('mikrotik.hotspot-profile', [
            'title' => 'Mikrotik hotspot profile',
            'data' => $data
        ]);
    }
}

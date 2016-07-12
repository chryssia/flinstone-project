<?php

namespace App\Http\Controllers;
use App\Services;
use App\Dashboard;
use App\Content;
use App\Code;
use App\Keluhan;
use App\Pengguna;
use App\Http\Controllers\Controller;

class RoutingController extends Controller
{
    /**
     * Show halaman dashboard
     *
     * @return Response
     */
    public function showLogin()
    {   
       
        return view('login');
    }
        /**
     * Show halaman dashboard
     *
     * @return Response
     */
    public function showCode()
    {   
        $data = Code::getAccount();
        return view('code',['data' => $data]);
    }

    /**
     * Show halaman dashboard
     *
     * @return Response
     */
    public function showDashboard()
    {   
        // $custData = Dashboard::getCustomers();
        // $servicesData = Dashboard::getServices();
        // $contentsData = Dashboard::getContents();
        // $revenueData = Dashboard::getTotalRevenue();
        // $reportData = Dashboard::getReport();
        // $contractData = Dashboard::checkContract();
        // $revenueServices = Dashboard::getRevenueServices();
        // return view('dashboard',['custData' => $custData,'contractData' => $contractData,'servicesData' => $servicesData,'contentsData' => $contentsData,'revenueData' => $revenueData,'reportData' => $reportData,'revenueServices' => $revenueServices]);
         $penggunaCount = Dashboard::getPenggunaCount();
        $keluhanCount = Dashboard::getKeluhanCount();
        return view('dashboard',['penggunaCount'=> $penggunaCount,'keluhanCount'=>$keluhanCount]);
    }


    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function showListServices()
    {   
        $data = Services::getServices();
        return view('services',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function showListTransaction()
    {   
        $data = Services::getTransaction();
        return view('transaction',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function showAddServices()
    {   
        $data = Services::addServices();
        return view('addservices',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function editContentCOD($id)
    {   
        $data = Services::getServicesById($id);
        return view('contentCod',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function editContentSubs($id)
    {   $services = Services::getServicesById($id);
        $data = Content::getContentById($id);
        return view('editcontentsubs',['data' => $data,'services' => $services]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function deleteServices($id)
    {   
        $data = Services::deleteServices($id);
        return view('contentSubs',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function showAllContentServices()
    {   
        $data = Content::getAllContents();
        return view('contentSubs',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function showContentSubs($id)
    {   
        $data = Content::getContentsPerId($id);
        return view('contentSubs',['data' => $data]);
    }

    /**
     * Show halaman daftar level customer
     *
     * @return Response
     */
    public function addContentSubs($id)
    {   
        $services = Services::getServicesById($id);
        $content = Content::getContentsPerId($id);
        return view('addcontent',['content' => $content, 'services' => $services]);
    }

    /**
     * Show halaman dashboard
     *
     * @return Response
     */
    public function showAPIManagement()
    {   

        return view('apimanagement');
    }

    public function showPengguna()
    {
        $data = Pengguna::getPengguna();
        return view('pengguna',['data' => $data]);

        // return view('pengguna');
    }

     public function showTambahPengguna()
    {   
       
        return view('tambahPengguna');
    }

    public function showUbahPengguna($id)
    {   
        $data = Pengguna::getPenggunaDariID($id);
        return view('ubahPengguna',['data'=>$data]);
    }
   

    public function showKeluhan()
    {
        $data = Keluhan::getKeluhan();
        
        return view('keluhan',['data' => $data]);
    }
    public function showTambahKeluhan()
    {
        return view('tambahKeluhan');
    }
    public function showUbahKeluhan($id)
    {   
        $data = Keluhan::getKeluhanDariID($id);
        return view('ubahKeluhan',['data' => $data]);
    }


}
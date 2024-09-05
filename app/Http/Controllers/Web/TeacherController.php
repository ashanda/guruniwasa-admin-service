<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }
    public function teachersSection()
    {
        try{

            return view('web.teachers.all_section');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classIssues()
    {
        try{

            return view('web.teachers.class_issues');

        }catch(\Exception $exception){

            return;
        }
    }

    public function classIssuesView()
    {
        try{

            return view('web.teachers.class_issues_view');

        }catch(\Exception $exception){

            return;
        }
    }



    public function videoIssues()
    {
        try{

            return view('web.teachers.video_issues');

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoIssuesView()
    {
        try{

            return view('web.teachers.video_issues_view');

        }catch(\Exception $exception){

            return;
        }
    }





    public function teacherReviews()
    {
        try{

            return view('web.teachers.teacher_reviews');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoReport()
    {
        try{

            return view('web.teachers.class_video_report');

        }catch(\Exception $exception){

            return;
        }
    }




    public function classAndVideoAnalysing()
    {
        try{

            return view('web.teachers.class_video_analysing');

        }catch(\Exception $exception){

            return;
        }
    }


    public function classAndVideoSummery()
    {
        try{

            return view('web.teachers.class_video_summery');

        }catch(\Exception $exception){

            return;
        }
    }
    public function videoTimeTables()
    {
        try{

            return view('web.teachers.video_time_tables');

        }catch(\Exception $exception){

            return;
        }
    }

    public function gradewiseTimeTables()
    {
        try{

            return view('web.teachers.grade_time_tables');

        }catch(\Exception $exception){

            return;
        }
    }
    public function teacherPayment()
    {
        try{

            return view('web.teachers.teacher_payment');

        }catch(\Exception $exception){

            return;
        }
    }
    public function teacherPaymentView()
    {
        try{

            return view('web.teachers.teacher_payment_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paymentAnalysing()
    {
        try{

            return view('web.teachers.payment_analysing');

        }catch(\Exception $exception){

            return;
        }
    }

    public function paymentAnalysingGraph()
    {
        try{

            return view('web.teachers.payment_analysing_graph');

        }catch(\Exception $exception){

            return;
        }
    }

    public function ourTeacher()
    {
        try{

            return view('web.teachers.our_teacher');

        }catch(\Exception $exception){

            return;
        }
    }


    public function scheduleClass()
    {
        try{

            return view('web.teachers.schedule_class');

        }catch(\Exception $exception){

            return;
        }
    }

    public function scheduleClassView()
    {
        try{

            return view('web.teachers.schedule_class_view');

        }catch(\Exception $exception){

            return;
        }
    }



    public function addGrade()
    {

        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/grades';
        
        try {
            $response = $client->get($url, [
                'headers' => [
                     'CLIENT-KEY' => $this->serverApiKey
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    $grades = $body['data']; // Extracting grades data from response
                    return view('web.teachers.add_grade', ['grades' => $grades]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            
            return back()->with('error', $e);
        }

    }

    public function updateGrade(Request $request)
    {
        
      $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/grades/' . $request->id;
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->put($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'gname' => $request->gname
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    Alert::success('Success', $body['message']);
                    return redirect()->back();
                } else {
                    Alert::error('Error', $body['message']);
                    return back();
                }
            }
        } catch (\Exception $e) {
            // Log the exception if necessary
            Log::error('Error fetching grades: '.$e->getMessage());

            // Return back with just the error message, avoiding the serialization issue
            return back()->with('error', 'An error occurred while fetching the grades. Please try again.');
        }
    }


    public function deleteGrade(Request $request)
    {
       
         $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/grades/' . $request->id;
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->delete($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
                'json' => [
                    'gname' => $request->gname
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 200) {
                   
                    Alert::success('Success', $body['message']);
                    return redirect()->back();
                } else {
                    Alert::error('Error', $body['message']);
                    return back();
                }
            }
        } catch (\Exception $e) {
            // Log the exception if necessary
            Log::error('Error fetching grades: '.$e->getMessage());

            // Return back with just the error message, avoiding the serialization issue
            return back()->with('error', 'An error occurred while fetching the grades. Please try again.');
        }

    }



    public function addSubject()
    {
        try{

            return view('web.teachers.add_subject');

        }catch(\Exception $exception){

            return;
        }
    }



}

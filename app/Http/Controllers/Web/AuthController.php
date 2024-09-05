<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }

    public function homeView()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.home.home',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function loginView(Request $request)
    {
        
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/admins-check-auth';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    
                    return redirect()->route('web.home')->with('success', $body['message']);
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
        } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
        }
    }
   









    public function forgotPassword()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.forgot-password',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }



    public function login(Request $request)
    {
        
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/admins-login';
        
        //try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'CLIENT_KEY' => $this->serverApiKey
                ],
                'form_params' => [
                    'username' => $request->phone_number,
                    'password' => $request->password,
                ]
            ]);

           if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            
            if (isset($body['status']) && $body['status'] === 200) {
                // Store token in a secure cookie
                Cookie::queue('access_token', $body['data']['access_token'], 360); // 360 minutes (6 hours)
              
                return redirect()->route('web.home')->with('success', $body['message']);
            } else {
                return back()->with('error', $body['message']);
            }
        }
       
    // } catch (\Exception $e) {
    //     Log::error('Login failed: ' . $e->getMessage());
    //     return back()->with('error', 'An error occurred while trying to log in.');
    // }
    }



    public function logout(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/admins-logout';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                     'CLIENT_KEY' => $this->serverApiKey
                ]
            ]);
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Cookie::queue(Cookie::forget('access_token'));
                    return redirect()->route('web.home')->with('success', $body['message']);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            Log::error('Logout failed: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while trying to log out.');
        }
    }

    public function createTeacher( Request $request){
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
                    return view('web.auth.add-teacher', ['grades' => $grades]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            
            return back()->with('error', $e);
        } 
    }

    public function addTeacher(Request $request){
        
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/register-teacher';
        $accessToken = $request->cookie('access_token');
        //try {
            // Make POST request to API endpoint
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    
                ],
                'form_params' => [
                        'name' => $request->full_name,
                        'grades' => $request->gradeList,
                        'address' => $request->address,
                        'district' => $request->district,
                        'town' =>$request->town,
                        'contact_no' => $request->contact_no,
                        'secondary_contact_no' => $request->secondary_contact_no,
                        'email' => $request->email,
                        'password' => $request->password,
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                
                if (isset($body['status']) && $body['status'] === 201) {
                    $body = json_decode($response->getBody(), true);
                
                    if (isset($body['status']) && $body['status'] === 201) {
                        Alert::success('Success', $body['message']);
                        return redirect()->route('web.teachers.our_teacher');
                    }else{
                        Alert::error('Error', 'Something went wrong with the request');
                        return back();
                    }
                } else {
                
                    return back()->with('error', $body['message']);
                }
            } else {
               Alert::error('Error', 'Something went wrong with the request');
               return back();
                
            }
        // } catch (\Exception $e) {
        //     Alert::error('Error', $e->getMessage());
        //     return back();
        // }
    }



}

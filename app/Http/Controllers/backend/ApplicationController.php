<?php

namespace App\Http\Controllers\backend;

use DataTables;
// use Barryvdh\DomPDF\PDF;
use PDF;
use ZipArchive;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class ApplicationController extends Controller
{
    

    public function index(Request $request)
    {
        $departure = $request->query('departure');
        $destination = $request->query('destination');
        return view('frontend.index',compact('departure','destination'));
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'departing'     => 'required|max:255',
            'destination'   => 'required|max:255',
            'connectiong'   => 'boolean',
            'airport_change' => 'required',
            'flight_problem' => 'required',
            'airlines'      => 'required',
            'flight_disruption' => 'required',
            'delayed_hours' => 'required',
            'caused'        => 'required',
            'name'          => 'required',
            'surname'       => 'required',
            'email'         => 'email',
            'passport_image'=> 'image'
        ]);

        $application = new Application();
        $application->departing         = $request->departing;
        $application->destination       = $request->destination;
        $application->connecting        = $request->connecting;
        $application->flight_disruption = $request->flight_disruption;
        $application->delayed_hours     = $request->delayed_hours;
        $application->cancellation_notification = $request->cancellation_notification;
        $application->caused            = $request->caused;
        $application->name              = $request->name;
        $application->surname           = $request->surname;
        $application->email             = $request->email;
        $application->agree_terms       = $request->agree_terms;
        $application->agree_promotions  = $request->agree_promotions;
        $application->traveling_alone   = $request->traveling_alone;
        $application->pnr               = $request->pnr;
        

        if($request->signature){
        $folderPath = public_path('images/');

        $image_parts = explode(";base64,", $request->signature);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid() . '.' . $image_type;
        $file = $folderPath . $filename;

        file_put_contents($file, $image_base64);
           
        $application->signature = $filename;
        }
        
        if($request->hasFile('passport_image')) {
            $image_tmp = $request->file('passport_image');
            if($image_tmp->isValid()) {
                //Get Original Image Name
                $image_extension = $image_tmp->getClientOriginalName();
                $image_name = pathinfo($image_extension, PATHINFO_FILENAME);
                //Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                //Generate new image name
                $imageName = $image_name.'-'.rand(111, 99999).'.'.$extension;
                //Set path for small, medium, large image
                $medium_image_path = public_path('images/passport_images/').$imageName;
                Image::make($image_tmp)->resize(760, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                //Save image in db
                $application->passport_image = $imageName;
            }  else {
            $application->passport_image = "";
           }
          }

        if ($request->airport_change) {
                $airport_change[] = array(
                    'airport_name' => $request->airport_change,
                );

            $application->airport_change = json_encode($airport_change);
        }

        if($request->airline_name){
                $airlines[] = array(
                  'airline_name'    => $request->airline_name,  
                  'flight_number'   => $request->flight_number,
                  'date'            => $request->date
                );
            $application->airlines  = json_encode($airlines);
        }
        
        
        if($request->other_name){
            $other_person = [];
        
            foreach($request->other_name as $key => $value){
                if(!empty($value)){
                $other_personItem = [
                    'id'        => $request->id[$key],
                    'under_age' => $request->underage[$key] ?? '0',
                    'name' => $value,
                    'surname' => $request->other_surname[$key],
                    'email' => $request->other_email[$key],
                ];
        
                // Handle image upload
                if ($request->hasFile('other_images.' . $key)) {
                    $image_tmp = $request->file('other_images.' . $key);
                    // $imagePath = $image->store('images/passport_images/'); // Customize the storage directory
                    // $other_personItem['image_path'] = $imagePath;
                    if($image_tmp->isValid()) {
                    //Get Original Image Name
                    $image_extension = $image_tmp->getClientOriginalName();
                    $image_name = pathinfo($image_extension, PATHINFO_FILENAME);
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate new image name
                    $imageName = $image_name.'-'.rand(111, 99999).'.'.$extension;
                    //Set path for small, medium, large image
                    $medium_image_path = public_path('images/passport_images/').$imageName;
                    Image::make($image_tmp)->resize(760, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($medium_image_path);
                    //Save image in db
                    $other_personItem['image_path'] = $imageName;
                    }  else {
                    $other_personItem['image_path'] = "";
                   }
                }
        
                // Handle signature upload
                if ($request->other_signatures[$key]) {
                    
                    $folderPath = public_path('images/');
                 
                    $image_parts1 = explode(";base64,", $request->other_signatures[$key]);
                    $image_type_aux1 = explode("image/", $image_parts1[0]);

                    $image_type1 = $image_type_aux1[1];
                    $image_base641 = base64_decode($image_parts1[1]);
                    $filename1 = uniqid() . '.' . $image_type1;
                    $file1 = $folderPath . $filename1;
            
                    file_put_contents($file1, $image_base641);
                     $other_personItem['signature_path'] = $filename1;
                    
                            $other_person[] = $other_personItem;
                        }
                    
                        $application->other_person = json_encode($other_person);
                    }
                    }
                }
     
        // if($request->other_name){
        //     $other_person = [];
        //     foreach($request->other_name as $key => $value){
        //         $other_person[] = array(
        //             'under_age' => $request->underage[$key] ?? '0',
        //             'name'      => $value,
        //             'surname'   => $request->other_surname[$key],
        //             'email'     => $request->other_email[$key]
        //         );
        //     }
        //     $application->other_person = json_encode($other_person);
        // }
        
        if ($request->address) {
            $address = [
                'address' => $request->address,
                'address2' => $request->address2 ?? '',
                'city' => $request->city,
                'postal_code' => $request->postal_code ?? '',
                'country' => $request->country,
                'phone' => $request->phone,
                'nationality' => $request->nationality,
            ];
            $application->address = json_encode($address);
        }
        
        dd($application);
        $application->save();
        

        $email = $application->email;

        // $messageData = [
        //             'email' => $email,
        //             'application' => $application
        //         ];
        // try{
        // Mail::send('email.confirm', $messageData, function($message) use($email){
        //             $message->to($email)->subject('Your claim was registered - SkyRights');
        //         });
        // }catch(\Exception $e)
        // {
            
        // }
        return view('frontend.thankyou');

    }

    public function all_applications()
    {
        return view('backend.applications.index');
    }
    public function newApplication()
    {
        return view('backend.applications.new');
    }
    public function confirmedApplication()
    {
        return view('backend.applications.confirmed');
    }
    public function unconfirmedApplication()
    {
        return view('backend.applications.unconfirmed');
    }
     public function paidApplication()
    {
        return view('backend.applications.paid');
    }

    public function all_applications_search(Request $request){
        if ($request->ajax()) {
            $data = Application::latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('singleApplication', $row->id);
                    $deleteUrl = route('deleteApplication', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Shiko</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') === null)  {
                            $instance->where('delivered', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('pnr', 'LIKE', "%$search%")
                                ->orWhere('other_person', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function confirmed_application_search(Request $request){
        if ($request->ajax()) {
            $data = Application::where('status',1)->latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('singleApplication', $row->id);
                    $deleteUrl = route('deleteApplication', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Shiko</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') === null)  {
                            $instance->where('status', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('pnr', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function unconfirmed_application_search(Request $request){
        if ($request->ajax()) {
            $data = Application::where('status',0)->latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('singleApplication', $row->id);
                    $deleteUrl = route('deleteApplication', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Shiko</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') == null)  {
                            $instance->where('status', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('pnr', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function paid_application_search(Request $request){
        if ($request->ajax()) {
            $data = Application::whereNotNull('paid')->latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('singleApplication', $row->id);
                    $deleteUrl = route('deleteApplication', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Shiko</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') === null)  {
                            $instance->where('status', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('pnr', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function new_application_search(Request $request){
        if ($request->ajax()) {
            $data = Application::where('status',null)->latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('singleApplication', $row->id);
                    $deleteUrl = route('deleteApplication', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Shiko</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1' || $request->get('approved') == '2' || $request->get('approved') == '3' || $request->get('approved') === null)  {
                            $instance->where('status', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%")
                                ->orWhere('pnr', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function singleApplication(Request $request,$id){
        $application = Application::findOrFail($id);
        return view('backend.applications.show',compact('application'));
    }

    public function destroy($id){
        $application = Application::findOrFail($id);
        $application->delete();
        $notification = array('message'=> 'Aplikimi u fshi me sukses!' ,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function statusUpdate(Request $request, $id)
    {
        $application = Application::findorFail($id);
        $application->status = $request->status;
        if($request->status == 0){
        $application->cancelled_explain = $request->cancelled_explain;
        }
        $application->paid = $request->paid;
        $email = $application->email;
        $messageData = [
            'email' => $email,
            'application' => $application
        ];
        if($application->status != null){
            if($application->status == 0){
                try{
                    Mail::send('email.confirm', $messageData, function($message) use($email){
                        $message->to($email)->subject('Unfortunately there is no compensation owed');
                        // $message->to('info@sky-rights.com')->subject('Unfortunately there is no compensation owed');
                    });
                }catch(\Exception $e){
                    
                }
                }elseif($application->status == 1){
                    try{
                    Mail::send('email.confirm', $messageData, function($message) use($email){
                        $message->to($email)->subject('Congratulations you owned a compensation for your claim');
                        // $message->to('info@sky-rights.com')->subject('Congratulations you owned a compensation for your claim');
                    });
                    }catch(\Exception $e){
                        
                    }
                }elseif($application->status == 2){
                    try{
                    Mail::send('email.confirm', $messageData, function($message) use($email){
                        $message->to($email)->subject('Your Claim is about to be sent to the airline');
                        // $message->to('info@sky-rights.com')->subject('Your Claim is about to be sent to the airline');
                    });
                    }catch(\Exception $e){
                        
                    }
                }elseif($application->status == 3){
                    try{
                    Mail::send('email.confirm', $messageData, function($message) use($email){
                        $message->to($email)->subject('Your Claim sent to airline');
                        // $message->to('info@sky-rights.com')->subject('Your Claim sent to airline');
                    });
                    }catch(\Exception $e){
                        
                    }
                }elseif($application->status == 5){
                    try{
                    Mail::send('email.confirm', $messageData, function($message) use($email){
                        $message->to($email)->subject('Request for Additional Information: Incomplete Data');
                        // $message->to('info@sky-rights.com')->subject('Your Claim sent to airline');
                    });
                    }catch(\Exception $e){
                        
                    }
                }

                
        }
        $application->save();

        $notification = array('message'=> 'Statusi Aplikantit u ndryshua me sukses!' ,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function createPDF($id){
        $application = Application::findOrFail($id);

        view()->share('application',$application);
        $pdf = Pdf::loadView('backend.applications.pdf', ['application' => $application]);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
    
    // public function createPDF_others($id){
    //     $application = Application::findOrFail($id);
    //     $other_persons = json_decode($application->other_person,true);
    //     foreach ($other_persons as $other_person) {
    //     $pdf = PDF::loadView('backend.applications.pdf-otherpersons', ['other_person' => $other_person, 'application' => $application]);

    //     $pdfFileName = 'person_file.pdf';

   
    //     return $pdf->download($pdfFileName);

    //     }
    // }



        // public function createPDF_others($id) {
        //     $application = Application::findOrFail($id);
        //     $other_persons = json_decode($application->other_person, true);
        
        //     // Create a temporary directory to store individual PDFs
        //     $tempDir = public_path('pdfs/temp/');
        //     if (!file_exists($tempDir)) {
        //         mkdir($tempDir, 0755, true);
        //     }
        
        //     // Create a zip archive
        //     $zip = new ZipArchive;
        //     $zipFileName = 'all_persons.zip';
        
        //     if ($zip->open(public_path('pdfs/' . $zipFileName), ZipArchive::CREATE) === true) {
        //         foreach ($other_persons as $other_person) {
        //             $pdf = PDF::loadView('backend.applications.pdf-otherpersons', ['other_person' => $other_person, 'application' => $application]);
                    
        //             // Generate a unique PDF file name based on person's name and surname
        //             $pdfFileName = 'person_' . $other_person['name'] . '_' . $other_person['surname'] . '.pdf';
                    
        //             // Save the PDF to the temporary directory
        //             $pdf->save($tempDir . $pdfFileName);
                    
        //             // Add the PDF to the zip archive
        //             $zip->addFile($tempDir . $pdfFileName, $pdfFileName);
        //         }
        
        //         $zip->close();
        //     }
        
        //     // Clean up the temporary directory
        //     array_map('unlink', glob("$tempDir*"));
        //     rmdir($tempDir);
        
        //     // Return the zip file for download
        //     return response()->file(public_path('pdfs/' . $zipFileName));
        // }
        
       public function createPDF_others($id) {
            $application = Application::findOrFail($id);
            $other_persons = json_decode($application->other_person, true);
        
            // Create a temporary directory to store individual PDFs
            $tempDir = public_path('pdfs/temp/');
            if (!file_exists($tempDir)) {
                mkdir($tempDir, 0755, true);
            }
        
            $zipFileName = 'all_persons_' . time() . '.zip';
            $zipFilePath = public_path('pdfs/' . $zipFileName);
        
            $zip = new ZipArchive;
        
            if ($zip->open($zipFilePath, ZipArchive::CREATE) === true) {
                foreach ($other_persons as $other_person) {
                    $pdf = PDF::loadView('backend.applications.pdf-otherpersons', ['other_person' => $other_person, 'application' => $application]);
        
                    $pdfFileName = 'person_' . $other_person['name'] . '_' . $other_person['surname'] . '.pdf';
        
                    // Save the PDF to the temporary directory
                    $pdfFilePath = $tempDir . $pdfFileName;
                    $pdf->save($pdfFilePath);
        
                    $zip->addFile($pdfFilePath, $pdfFileName);
                }
        
                $zip->close();
        
                // Clean up the temporary directory
                array_map('unlink', glob("$tempDir*"));
                rmdir($tempDir);
        
                return response()->file($zipFilePath);
            }
        
            return response('Unable to create ZIP archive.', 500);
        }



}

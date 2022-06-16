<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\bill;
use App\Models\meal;
use App\Models\User;
use App\Models\costm;
use App\Models\rooms;
use App\Models\blocks;
use App\Models\salary;
use App\Models\deposit;
use App\Models\noticeb;
use App\Models\student;
use App\Models\employee;
use App\Models\countries;
use App\Models\meal_Rate;
use App\Models\seatalloc;
use App\Models\attendance;
use App\Models\studentpay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;

class HmsController extends Controller
{
public function index(){
   if(Auth::user()->role_as == 1){
       return view('layouts.head');
   }else{
       return view('layouts.header');
   }
}

    public function attend(Request $request){
$attend = new attendance ;

$attend->student_name = $request->student_name;
$attend->attend_date = $request->attend_date;
$attend->isAbsence = $request->isAbsence;
$attend->isleave = $request->isleave;
$attend->remark = $request->remark;
$attend->user_id = auth::user()->id;
$attend->save();
if($attend->save()){
    return redirect()->back()->with('attend', "Attendance has been taken successfully!");
}else{
    return redirect()->back()->with('atten', "Unable to Take Attendance!");
}

    }

    public function bill(Request $request){
$bill = new bill;

$bill->bill_type = $request->bill_type;
$bill->bill_to = $request->bill_to;
$bill->amount = $request->amount;
$bill->bill_date = $request->bill_date;
$bill->user_id = auth::user()->id;
$bill->save();
if($bill->save()){
    return redirect()->back()->with('bill' ,"Bill has been created Successfully!");
}else{
    return redirect()->back()->with('bil' ,"Unable to create Bill!");
}
    }

    public function block(Request $request){
$block = new blocks;
$block->block_no = $request->block_no;
$block->block_name = $request->block_name;
$block->description = $request->description;
$block->user_id = auth::user()->id;
$block->save();
if($block->save()){
    return redirect()->back()->with('block' ,"Block has been created Successfully!");
}else{
    return redirect()->back()->with('blo' ,"Unable to create Block!");
}
    }

    public function costm(Request $request){
        $cost = new costm;
        $cost->cost_type = $request->cost_type;
        $cost->amount = $request->amount;
        $cost->description = $request->description;
        $cost->date = $request->date;
        $cost->user_id = auth::user()->id;
        $cost->save();
        if($cost->save()){
            return redirect()->back()->with('cost' ,"Cost has been created Successfully!");
        }else{
            return redirect()->back()->with('cos' ,"Unable to create Cost!");
        }
    }

    public function deposit(Request $request){
        $deposit = new deposit;
        $deposit->student_name = $request->student_name;
        $deposit->amount = $request->amount;
        $deposit->deposit_date = $request->deposit_date;
        $deposit->user_id = auth::user()->id;
        $deposit->save();
        if($deposit->save()){
            return redirect()->back()->with('deposit' ,"Money has been deposited Successfully!");
        }else{
            return redirect()->back()->with('depo' ,"Unable to Deposit Money!");
        }
    }

    public function mealrate(Request $request){
$mealrate = new meal_Rate;
$mealrate->nameof_meal = $request->nameof_meal;
$mealrate->rate = $request->rate;
$mealrate->user_id = auth::user()->id;
$mealrate->save();
if($mealrate->save()){
    return redirect()->back()->with('rate' ,"Meal has been Rated Successfully!");
}else{
    return redirect()->back()->with('rat' ,"Unable to Rate Meal!");
}
    }

    public function meal(Request $request){
$meal = new meal;

$meal->student_name = $request->student_name;
$meal->no_ofmeal = $request->no_ofmeal;
$meal->date = $request->date;
$meal->user_id = auth::user()->id;
$meal->save();
if($meal->save()){
    return redirect()->back()->with('meal' ,"Meal has been Added Successfully!");
}else{
    return redirect()->back()->with('mea' ,"Unable to Add Meal!");
}
    }

    public function notice(Request $request){
$notice = new noticeb;
$notice->title = $request->title;
$notice->description = $request->description;
$notice->user_id = auth::user()->id;
$notice->save();
if($notice->save()){
    return redirect()->back()->with('noti' ,"Information has been Added Successfully!");
}else{
    return redirect()->back()->with('not' ,"Unable to Add Information!");
}
    }

public function rooms(Request $request){
$room = new rooms;
$room->room_no = $request->room_no;
$room->block_no = $request->block_no;
$room->noOfseat = $request->noOfseat;
$room->description = $request->description;
$room->user_id = auth::user()->id;
$room->save();
if($room->save()){
    return redirect()->back()->with('room' ,"Room has been Added Successfully!");
}else{
    return redirect()->back()->with('roo' ,"Unable to Add Room!");
}
} 


public function salary(Request $request){
$salary = new salary;
$salary->employ_name = $request->employ_name;
$salary->monthYear_paid = $request->monthYear_paid;
$salary->amount = $request->amount;
$salary->paid_date = $request->paid_date;
$salary->user_id = auth::user()->id;
$salary->save();
if($salary->save()){
    return redirect()->back()->with('salary' ,"Salary has been Added Successfully!");
}else{
    return redirect()->back()->with('sala' ,"Unable to Add Salary!");
}
}

public function seat(Request $request){
$seat = new seatalloc;
$seat->student_name = $request->student_name;
$seat->block_no = $request->block_no;
$seat->room_no = $request->room_no;
$seat->monthly_rent = $request->monthly_rent;
$seat->user_id = auth::user()->id;
$seat->save();
if($seat->save()){
    return redirect()->back()->with('seat' ,"Seat has been Successfully Allocated!");
}else{
    return redirect()->back()->with('sea' ,"Unable to Allocate Seat!");
}
}

public function studentpay(Request $request){
$studpay = new studentpay;
$studpay->student_name = $request->student_name;
$studpay->payment_date = $request->payment_date;
$studpay->paid_by = $request->paid_by;
$studpay->transaction_num = $request->transaction_num;
$studpay->amount = $request->amount;
$studpay->description = $request->description;
$studpay->user_id = auth::user()->id;
$studpay->save();
if($studpay->save()){
    return redirect()->back()->with('stud' ,"Payment Details has been Successfully Saved!");
}else{
    return redirect()->back()->with('stu' ,"Unable to save Payment Details!");
}
}

public function student(Request $request){
$student = new student;

$student->user_id = auth::user()->id;
$student->fullname = $request->fullname;
$student->phone_num = $request->phone_num;
$student->email = $request->email;
$student->password = $request->password;
$student->nameof_insti = $request->nameof_insti;
$student->program = $request->program;
$student->batch_no = $request->batch_no;
$student->gender = $request->gender;
$student->date_of_birth = $request->date_of_birth;
$student->blood_group = $request->blood_group;
$student->nationality = $request->nationality;
$student->national_id = $request->national_id;
$student->passport_no = $request->passport_no;
$student->father_name = $request->father_name;
$student->father_num = $request->father_num;
$student->mother_name = $request->mother_name;
$student->mother_num = $request->mother_num;
$student->local_guardian = $request->local_guardian;
$student->guardian_num = $request->guardian_num;
$student->present_address = $request->present_address;
$student->permanent_address = $request->permanent_address;

if($request->hasfile('profile_image')){
    $file = $request->file('profile_image');
    $extension = $file->getClientOriginalExtension();
    $filename = time(). '.' . $extension;
    $file->move('uploads/student/', $filename);
    $student->profile_image = $filename;
}
$student->save();
if($student->save()){
    return redirect()->back()->with('student' ,"Student Admitted Successfully!");
}else{
    return redirect()->back()->with('stude' ,"Unable to Admit Student!");
}
// $student->profile_image = $request->profile_image;
}

public function employe(Request $request){
$employ = new employee ; 

$employ->user_id = auth::user()->id;
$employ->fullname = $request->fullname;
$employ->employ_type = $request->employ_type;
$employ->gender = $request->gender;
$employ->dob = $request->dob;
$employ->doj = $request->doj;
$employ->phone_num = $request->phone_num;
$employ->email = $request->email;
$employ->address = $request->address;
$employ->salary = $request->salary;
$employ->block_no = $request->block_no;
$employ->isActive = $request->isActive;

if($request->hasfile('profile')){
    $file = $request->file('profile');
    $extension = $file->getClientOriginalExtension();
    $filename = time(). '.' . $extension;
    $file->move('uploads/student/', $filename);
    $employ->profile = $filename;
}
$employ->save();
if($employ->save()){
    return redirect()->back()->with('employ' ,"Employee Added Successfully!");
}else{
    return redirect()->back()->with('emp' ,"Unable to Add Employee!");
}

}
//for views only
public function viewattend(){
    $atten = attendance::all();
    return view('attendance.view_attend', compact('atten'));
}

public function viewbill(){
    $bills = bill::all();
    return view('billmanag.viewbill', compact('bills'));
}
public function viewblock(){
    $blocks = blocks::all();
    return view('bloc.viewbloc', compact('blocks'));
}

public function viewnotice(){
    $notice = noticeb::all();
    return view('noticeboard.view_notice', compact('notice'));
}
public function viewcost(){
    $costs = costm::all();
    return view('costmanag.viewcost', compact('costs'));
}
public function viewemploy(){
    $employs = employee::all();
    return view('employee.list_emp', compact('employs'));
}

public function viewsalary(){
    $salary = salary::all();
    return view('employee.view_salary', compact('salary'));
}
public function viewmeal(){
    $meal = meal::all();
    return view('meal.view_meal', compact('meal'));
}
public function viewrate(){
    $rate = meal_Rate::all();
    return view('mealra.viewrate', compact('rate'));
}
public function viewroom(){
    $rooms = rooms::all();
    return view('room.viewroom', compact('rooms'));
}
public function viewstudent(){
    $students = student::all();
    return view('student.student_list', compact('students'));
}

public function viewstudpay(){
    $studs = studentpay::all();
    return view('studentpayment.viewpay', compact('studs'));
}
public function viewdeposit(){
    $deposits = deposit::all();
    return view('student.viewdep', compact('deposits'));
}
public function viewseat(){
    $seat = seatalloc::all();
    return view('student.viewseat', compact('seat'));
}

public function viewuser(){
    $us1 = User::all();
    // dd($us1);
    return view('allu', compact('us1'));
}

// public function viewstudent1(){
//     $studen = student::all();
//     return view('layouts.head', compact('studen'));
// }
//for editing only

public function editattend($id){

$atte = attendance::find($id);
if(auth::user()->role_as == 0){
    return redirect()->back()->with('edi','You can not edit because you are not Admin');
}else{
    return view('attendance.editatten', compact('atte'));
}
}

public function editbill($id){
    $bill = bill::find($id);
    if(auth::user()->role_as == 0){
        return redirect()->back()->with('edi','You can not edit because you are not Admin');
    }else{
    return view('billmanag.editbill', compact('bill'));
}
    }

    public function editblock($id){
        $block = blocks::find($id);
        if(auth::user()->role_as == 0){
            return redirect()->back()->with('edi','You can not edit because you are not Admin');
        }else{
            return view('bloc.editbloc', compact('block'));
    }
}
        public function editcost($id){
            $cost = costm::find($id);
            if(auth::user()->role_as == 0){
                return redirect()->back()->with('edi','You can not edit because you are not Admin');
            }else{
                return view('costmanag.editcost', compact('cost')); 
        } 
}
    
    public function editemploy($id){
        
        $employ = employee::find($id);
        if(auth::user()->role_as == 0){
            return redirect()->back()->with('edi','You can not edit because you are not Admin');
        }else{
            return view('employee.editemp', compact('employ'));
    } 
        
    }
        
        public function editsalary($id){
            
            $salary = salary::find($id);
            if(auth::user()->role_as == 0){
                return redirect()->back()->with('edi','You can not edit because you are not Admin');
            }else{
                return view('employee.editsala', compact('salary'));
        } 
  
            
        }
            
            public function editmeal($id){
                
                $meal = meal::find($id);
                if(Auth::user()->role_as == 0){
                    return redirect()->back()->with('edi','You can not edit because you are not Admin');
                }else{
                    return view('meal.editmeal', compact('meal'));
            } 
               
                
            }
                
                public function editrate($id){
                    
                    $rate = meal_Rate::find($id);
                    if(auth::user()->role_as == 0){
                        return redirect()->back()->with('edi','You can not edit because you are not Admin');
                    }else{
                        return view('mealra.editrate', compact('rate'));
                } 
                   
               
                    
                }
                    
                    public function editnotice($id){
                        
                        $notice = noticeb::find($id);
                        if(auth::user()->role_as == 0){
                            return redirect()->back()->with('edi','You can not edit because you are not Admin');
                        }else{
                            return view('noticeboard.editnotic', compact('notice'));
                    } 
                      
                        
                    }
                        
                        public function editroom($id){
                            
                            $room = rooms::find($id);
                            if(auth::user()->role_as == 0){
                                return redirect()->back()->with('edi','You can not edit because you are not Admin');
                            }else{
                                return view('room.editroom', compact('room'));
                        } 
                           
                            
                        }
                            
                            public function editstudent($id){
                                
                                $student = student::find($id);
                                if(auth::user()->role_as == 0){
                                    return redirect()->back()->with('edi','You can not edit because you are not Admin');
                                }else{
                                  
                                    return view('student.editstudent', compact('student'));
                            } 
                               
                                
                            }
                                
                                public function editdep($id){
                                    
                                    $depo = deposit::find($id);
                                    if(auth::user()->role_as == 0){
                                        return redirect()->back()->with('edi','You can not edit because you are not Admin');
                                    }else{
                                        return view('student.editdeposit', compact('depo'));
                                    
                                } 
                                  
                                }
                                    
                                    public function editseat($id){
                                        
                                        $seat = seatalloc::find($id);
                                        if(auth::user()->role_as == 0){
                                            return redirect()->back()->with('edi','You can not edit because you are not Admin');
                                        }else{
                                            return view('student.editseat', compact('seat'));           
                                    } 
                                       
                                        }public function editstudpay($id){
                                            
                                            $pay = studentpay::find($id);
                                            if(auth::user()->role_as == 0){
                                                return redirect()->back()->with('edi','You can not edit because you are not Admin');
                                            }else{
                                                return view('studentpayment.editpay', compact('pay'));          
                                        } 
                                          
                                            
                                        }

                                        public function edituser($id){
                                            $use = User::find($id);
                                            if(auth::user()->role_as == 0){
                                                return redirect()->back()->with('edi','You can not edit because you are not Admin');
                                            }else{
                                                return view('setting', compact('use'));          
                                        } 
                                        }
//for showing all student
                                            
  public function show_student($id){
                                                
 $show = student::find($id);
//    dd($show);                                             
return view('student.showstud', compact('show'));
                                                
}
//for updating only

public function updateattend(Request $request,$id){
$upatte = attendance::find($id);
$input = $request->all();
$upatte->update($input);
return redirect()->back()->with('at', "Attendance has been Successfully Updated");
}

public function updateuser(Request $request,$id){
    $upus = User::find($id);
    $inputu = $request->all();
    $upus->update($inputu);
    return redirect()->back()->with('at', "User has been Successfully Updated");
    }



public function updatebill(Request $request,$id){
    $upbill = bill::find($id);
    $input1 = $request->all();
    $upbill->update($input1);
    return redirect()->back()->with('bils', "Bill has been Successfully Updated");
    }

    public function updatebloc(Request $request,$id){
        $upbloc = blocks::find($id);
        $input2 = $request->all();
        $upbloc->update($input2);
        return redirect()->back()->with('blos', "Block has been Successfully Updated");
        }

        public function updatecost(Request $request,$id){
            $upcos = costm::find($id);
            $input3 = $request->all();
            $upcos->update($input3);
            return redirect()->back()->with('cos', "Cost has been Successfully Updated");
            }

            public function updatedep(Request $request,$id){
                $upde = deposit::find($id);
                $input4 = $request->all();
                $upde->update($input4);
                return redirect()->back()->with('dep', "Deposit has been Successfully Updated");
                }

                public function updateemp(Request $request,$id){
$upemp = employee::find($id);
                    // $student = Student::find($id);
$upemp->fullname = $request->fullname;
$upemp->employ_type = $request->employ_type;
$upemp->gender = $request->gender;
$upemp->dob = $request->dob;
$upemp->doj = $request->doj;
$upemp->phone_num = $request->phone_num;
$upemp->email = $request->email;
$upemp->address = $request->address;
$upemp->salary = $request->salary;
$upemp->block_no = $request->block_no;
$upemp->isActive = $request->isActive;
//  dd($request->hasfile('profile_edit'));
if($request->hasfile('profile') && $request->profile != '')

        {
            $destination1 = 'uploads/student/'.$upemp->profile;
            // dd($destination1);
            if(FacadesFile::exists($destination1))
            {
                FacadesFile::delete($destination1);
                // return true;
            }
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/student/', $filename);
            $upemp->profile = $filename;
        }

// $data =  $upemp->profile;
        $upemp->update();
        return redirect()->back()->with('em','Student Image Updated Successfully');
     }          
                    

                    public function updaterate(Request $request,$id){
                        $upra = meal_rate::find($id);
                        $input6 = $request->all();
                        $upra->update($input6);
                        return redirect()->back()->with('ra', "Rate has been Successfully Updated");
                        }

                        public function updatemea(Request $request,$id){
                            $upme = meal::find($id);
                            $input7 = $request->all();
                            $upme->update($input7);
                            return redirect()->back()->with('mea', "Meal has been Successfully Updated");
                            }

                            public function updatenotice(Request $request,$id){
                                $upnot =noticeb::find($id);
                                $input8 = $request->all();
                                $upnot->update($input8);
                                return redirect()->back()->with('noti', "Information has been Successfully Updated");
                                }

public function updateroom(Request $request,$id){
    $upro = rooms::find($id);
    $input9 = $request->all();
    $upro->update($input9);
    return redirect()->back()->with('ro', "Room has been Successfully Updated");
    }

    public function updatesalary(Request $request,$id){
        $upsal = salary::find($id);
        $input10 = $request->all();
        $upsal->update($input10);
        return redirect()->back()->with('sal', "Salary has been Successfully Updated");
        }

        public function updateseat(Request $request,$id){
            $upse = seatalloc::find($id);
            $input11 = $request->all();
            $upse->update($input11);
            return redirect()->back()->with('se', "Seat Allocation has been Successfully Updated");
            }
            // return redirect()->back()->with('st', "Student Detail has been Successfully Updated");
            public function updatestudent(Request $request,$id){
$student = student::find($id);
// $input12 = $request->all();
$student->fullname = $request->fullname;
 $student->phone_num = $request->phone_num;
 $student->email = $request->email;
 $student->password = $request->password;
 $student->nameof_insti = $request->nameof_insti;
 $student->program = $request->program;
 $student->batch_no = $request->batch_no;
 $student->gender = $request->gender;
 $student->date_of_birth = $request->date_of_birth;
 $student->blood_group = $request->blood_group;
 $student->nationality = $request->nationality;
 $student->national_id = $request->national_id;
 $student->passport_no = $request->passport_no;
 $student->father_name = $request->father_name;
 $student->father_num = $request->father_num;
 $student->mother_name = $request->mother_name;
 $student->mother_num = $request->mother_num;
 $student->local_guardian = $request->local_guardian;
 $student->guardian_num = $request->guardian_num;
 $student->present_address = $request->present_address;
 $student->permanent_address = $request->permanent_address;
//  dd($request->hasfile('profile_image'));
 if($request->hasfile('profile_image') && $request->profile_image != '')

 {
     $destination = 'uploads/student/'. $student->profile_image;
    //   dd($destination);
     if(FacadesFile::exists($destination))
     {
         FacadesFile::delete($destination);
         // return true;
     }
     $file = $request->file('profile_image');
     $extention = $file->getClientOriginalExtension();
     $filename = time().'.'.$extention;
     $file->move('uploads/student/', $filename);
     $student->profile_image = $filename;
 }

// $data =  $upemp->profile;
$student->update();
 return redirect()->back()->with('stus','Student Info Updated Successfully');
}
 
  public function updatepay(Request $request,$id){
    $uppay = studentpay::find($id);
       $input13 = $request->all();
      $uppay->update($input13);
     return redirect()->back()->with('pa', "Payment has been Successfully Updated");
     }


     // for delete only

     public function destroyattend($id){
        if(auth::user()->role_as == 0){
            return redirect()->back()->with('det','you can not edit because you are not admin');
        }else{
            $attend1 = attendance::find($id)->delete();
            return redirect()->back()->with('att', "Attendance has been Deleted Successfully");         
    }
     }

     public function destroybill($id){
        if(auth::user()->role_as == 0){
            return redirect()->back()->with('det','you can not edit because you are not admin');
        }else{
            $bill1 = bill::find($id)->delete();
        return redirect()->back()->with('bis', "Bill has been Deleted Successfully");
    }

       
             }
             public function destroybloc($id){
                if(auth::user()->role_as == 0){
                    return redirect()->back()->with('det','you can not edit because you are not admin');
                }else{
                    $blo11 = blocks::find($id)->delete();
                    return redirect()->back()->with('blo', "Blocks has been Deleted Successfully");
            }


                     }
                     public function destroycost($id){
                        if(auth::user()->role_as == 0){
                            return redirect()->back()->with('det','you can not edit because you are not admin');
                        }else{
                            $cos1 = costm::find($id)->delete();
                            return redirect()->back()->with('co', "Cost has been Deleted Successfully");
                    }

                      
                             }

                             public function destroydep($id){
                                if(auth::user()->role_as == 0){
                                    return redirect()->back()->with('det','you can not edit because you are not admin');
                                }else{
                                    $dep1 = deposit::find($id)->delete();
                                    return redirect()->back()->with('de', "Deposit has been Deleted Successfully");
                            }
                                
                                     }

                                     public function destroyempl($id){

                                        if(auth::user()->role_as == 0){
                                            return redirect()->back()->with('det','you can not edit because you are not admin');
                                        }else{
                                            $employ1 = employee::find($id)->delete();
                                            return redirect()->back()->with('em', "Employee has been Deleted Successfully");
                                    }
                                        
                                       
                                             }

                                             public function destroyrate($id){
                                                if(auth::user()->role_as == 0){
                                                    return redirect()->back()->with('det','you can not edit because you are not admin');
                                                }else{
                                                    $rate1 = meal_rate::find($id)->delete();
                                                    return redirect()->back()->with('rat', "Rate has been Deleted Successfully");
                                            }
                                                
                                                     }

                                                     public function destroymeal($id){
                                                        if(auth::user()->role_as == 0){
                                                            return redirect()->back()->with('det','you can not edit because you are not admin');
                                                        }else{
                                                            $meal1 = meal::find($id)->delete();
                                                            return redirect()->back()->with('mea', "Meal has been Deleted Successfully");
                                                    }
                                                        
                                                             }

                                                             public function destroynoti($id){
                                                                if(auth::user()->role_as == 0){
                                                                    return redirect()->back()->with('det','you can not edit because you are not admin');
                                                                }else{
                                                                    $noti1 = noticeb::find($id)->delete();
                                                                    return redirect()->back()->with('noti', "Information has been Deleted Successfully");
                                                            }
                                                              
                                                               
                                                                     }

                                                                     public function destroyroom($id){
                                                                        if(auth::user()->role_as == 0){
                                                                            return redirect()->back()->with('det','you can not edit because you are not admin');
                                                                        }else{
                                                                            $room1 = rooms::find($id)->delete();
                                                                            return redirect()->back()->with('roo', "Room has been Deleted Successfully");
                                                                    }
                                                                       
                                                                             }

                                                                             public function destroysalary($id){
                                                                                if(auth::user()->role_as == 0){
                                                                                    return redirect()->back()->with('det','you can not edit because you are not admin');
                                                                                }else{
                                                                                    $salarys1 = attendance::find($id)->delete();
                                                                                return redirect()->back()->with('sala', "Salary has been Deleted Successfully");
                                                                            }
                                                                               
                                                                                     }

                                                                                     public function destroyseat($id){
                                                                                        if(auth::user()->role_as == 0){
                                                                                            return redirect()->back()->with('det','you can not edit because you are not admin');
                                                                                        }else{
                                                                                            $seat1 = seatalloc::find($id)->delete();
                                                                                            return redirect()->back()->with('sea', "Seat Allocation has been Deleted Successfully");
                                                                                    }
                                                                                       
                                                                                             }

public function destroystudent($id){
    if(auth::user()->role_as == 0){
        return redirect()->back()->with('det','you can not edit because you are not admin');
    }else{
        $stu1 = student::find($id)->delete();
        return redirect()->back()->with('st', "Student Detail has been Deleted Successfully");
}

        }

public function destroypay($id){
    if(auth::user()->role_as == 0){
        return redirect()->back()->with('det','you can not edit because you are not admin');
    }else{
        $stupa =studentpay::find($id)->delete();
        return redirect()->back()->with('pay', "Payment has been Deleted Successfully");
}

     }
    
     
     public function country(){
         $country = countries::all();
         return view('student.admit_stud', compact('country'));
     }

     public function total(){
         $employee = employee::count();
        $room = rooms::count();
        $users = User::where('role_as', '0')->count();
        $admin = User::where('role_as', '1')->count();
         return view('admin.dashboard', compact('employee', 'room', 'users', 'admin'));
     }

     public function tota(){
         $bills1 = bill::count();
         $meals1 = meal::count();
         $info = noticeb::count();
         return view('home', compact('bills1', 'meals1', 'info'));
     }
}
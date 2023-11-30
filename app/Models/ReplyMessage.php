<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\DB;

use Mail;

class ReplyMessage extends Model
{
    /** Sends Messages From Contact Form */
    public static function SendMessage($body,$subject,$name,$to,$id){
      //The Generic mailler Goes here
      $data = array(
        'name'=>$name,
        'subject'=>$subject,
        'messageAppend'=>$body
    );
    $appName = config('app.name');
    $appEmail = config('mail.username');
 
 
    $FromVariable = $appEmail;
    $FromVariableName = $appName;

    $toVariable = $to;
    $toVariableName = $name;

    


    Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
        $message->from($FromVariable , $FromVariableName);
        $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
    
});
// Sets the status to Read
  $updateDetail = array(
      'status' => 1
  );
  DB::table('messages')->where('id',$id)->update($updateDetail);
  return back();
    }

    public static function mailSubscriber($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content, 
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }
    /** Sends The Subscribers Mail with attachment link, the Url is the link to the file */
    public static function mailSubscribers($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content,
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }

    public static function messageClient($email,$name){
        //The Generic mailler Goes here
        $url = ('/privacy');
        $messageee = 'Hi '.$name.', 
        You have created an account with Koriema Agrifoods Limited,
        Should you require to update your info please login to the clients area, 
        Go to profile settings and update your info
         <br>
         Your info is safe with us in accordance to our <a href="https://koriemabutchery.co.ke/privacy">privacy policy</a>. ';
        $data = array(
           
            
            'content'=>$messageee,
           
           
          
        );
        $subject = "Account Created!";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;

        $toVariableName = 'Koriema Agrifoods';


        Mail::send('mailContact', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }
  
    public static function mailNotificaton($name, $email, $subject, $message){ 
        //The Generic mailler Goes here
        $messageee = 'Hi Admin, You have Received a Message From '.$email.'';
        $data = array(
           
            'content'=>$messageee,
            'messages'=>$message,
           
          
        );
        $subject = $subject;
        $appName = "Edition Investments Limited";
        $appEmail = "info@editioninvestments.com";
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Edition Investments Limited Admin';


        Mail::send('mailcontact', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email,$name){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyTo($email , $name)->subject($subject);
        });
    }
    
    public static function mailNotificatons($name, $email, $subject, $message, $phone, $service, $type){ 
        //The Generic mailler Goes here
        $messageee = 'Hi Admin, You have Received a Quote Request From '.$name.', Email Address: '.$email.' , Phone number: '.$phone.', Type of Property: '.$type.', Services: '.$service.' ';
        $data = array(
           
            'content'=>$messageee,
            'messages'=>$message,
           
          
        );
        $subject = $subject;
        $appName = "Edition Investments Limited";
        $appEmail = "info@designekta.com";
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Edition Investments Limited';


        Mail::send('mailcontact', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email,$name){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@designekta.com')->replyTo($email , $name)->subject($subject);
        });
    }
   

    public static function mailclientt($email,$name,$phone){ 
        //The Generic mailler Goes here
        $message = 'Hi '.$name.', Your Order Has Been Received, We will contact you shortly';
        $data = array(
    
      
            'content'=>$message,
          
          
        );
        $subject = "Order Confirmation";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;

        $toVariableName = $name;


        Mail::send('mailclienttwo', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    } 

    public static function mailmerchant($email,$name,$phone){
        $message = 'Hi, A person by name, '.$name.' and email address '.$email.' and phone number '.$phone.' Has purchases an item';
        $subject = 'New Purchase';
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$message,
            'service'=>$subject,
          
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Koriema Agrifoods';


        Mail::send('mailclienttwo', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }

    
    public static function mailclientinvoice($email,$name,$invoicenumber,$ShippingFee,$TotalCost){
        $message = 'Hello '.$name.'';
        $subject = 'Your Invoice Has Been Created';
        $CartItems = Cart::content();
       
        // Process Cart

        //The Generic mailler Goes here
        $data = array(
            'invoicenumber'=>$invoicenumber,  
            'content'=>$message, 
            'subject'=>$subject,
            'ShippingFee'=>$ShippingFee,
            'TotalCost'=>$TotalCost,
            'name'=>$name,
            'CartItems'=>$CartItems,
                      
        );
        
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;

        $toVariableName = $name;


        Mail::send('mailclientInvoice', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }
    public static function mailclient($email,$name,$invoicenumber,$ShippingFee,$TotalCost){
        $message = 'Hello '.$name.'';
        $subject = 'Your Invoice Has Been Created';
        $CartItems = Cart::content();
       
        // Process Cart

        //The Generic mailler Goes here
        $data = array(
            'invoicenumber'=>$invoicenumber,  
            'content'=>$message, 
            'subject'=>$subject,
            'ShippingFee'=>$ShippingFee,
            'TotalCost'=>$TotalCost,
            'name'=>$name,
            'CartItems'=>$CartItems,
                      
        );
        
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;

        $toVariableName = $name;


        Mail::send('mailclientInvoice', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }
    public static function mailmerchantCOD($email,$name,$phone){
        $message = 'Hi, A person by name, '.$name.' and email address '.$email.' and phone number '.$phone.' Has purchases an item';
        $subject = 'Cash on Delivery Purchase';
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$message,
            'service'=>$subject,
          
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Koriema Agrifoods';


        Mail::send('mailclient', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }

    // Notification
    public static function notification($email){
        $data = array(
            
            'email'=>$email,
            
          
            
          
        );
        $subject = "New Subscriber";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Admin';


        Mail::send('notify', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('rumenyakonyi@gmail.com')->cc('info@koriema-agrifoods.co.ke')->subject($subject);
        });
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class bookingController extends Controller
{
    public function index()
    {
        return view('frontend.Booking');
    }

    public function store(Request $request)
    {
        $booking = new booking();
        $booking->name = $request['name'];
        $booking->email = $request['email'];
        $booking->number = $request['number'];
        $booking->country = $request['country'];
        $booking->address = $request['address'];
        $booking->city = $request['city'];
        $booking->cars = $request['cars'];
        $booking->color = $request['color'];
        $booking->payment = $request['payment'];
        $booking->save();

        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $country = $request->country;
        $address = $request->address;
        $city = $request->city;
        $cars = $request->cars;
        $color = $request->color;
        $payment = $request->payment;

        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Mailer = "smtp";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "demoa2052@gmail.com";
        $mail->Password = "smiltfvftqabevsq";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom($email, "Cars");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "Booking Successfully";
        $mail->Body   = "Delivered car as soon as possible";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully sent to user';
        } else {
            echo 'something went wrong';
        }
        $mail->setFrom($email, "cars");
        $mail->addAddress("demoa2052@gmail.com");
        $mail->isHTML(true);
        $mail->SMTPSecure = 'tls';
        $mail->Subject  = "Booking perform person";
        $mail->Body   = "Booking confirmed your car delivered to u as soon as possible";
        $dt = $mail->send();
        if ($dt) {
            // echo 'Email has been send successfully';
        } else {
            echo 'something went wrong';
        }
        return view('frontend.index');
    }
}

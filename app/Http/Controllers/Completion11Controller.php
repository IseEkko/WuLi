<?php

namespace App\Http\Controllers;

use App\Models\Completion11;
use App\Models\Student;
use Illuminate\Http\Request;

class Completion11Controller extends Controller
{
    /*
     * 实验11
     */
    public function completion11(Request $request){
        $one_ig = $request['one_ig'];
        $one_rg = $request['one_rg'];
        $one_e = sprintf("%.1f",$request['one_e']);

        $two_one_r1gs = $request['two_one_r1gs'];
        $two_one_r1 = sprintf("%.1f",$request['two_one_r1']);
        $two_two_rn = sprintf("%.1f",$request['two_two_rn']);
        $two_two_im = sprintf("%.1f",$request['two_two_im']);
        $two_two_r2gs = $request['two_two_r2gs'];
        $two_two_vm = sprintf("%.1f",$request['two_two_vm']);
        $two_two_im2 = sprintf("%.1f",$request['two_two_im2']);
        $two_two_rn2 = sprintf("%.1f",$request['two_two_rn2']);
        $two_two_r2 = sprintf("%.1f",$request['two_two_r2']);
        $two_thr_r4 = $request['two_thr_r4'];
        $two_thr_e = sprintf("%.1f",$request['two_thr_e']);
        $two_thr_im2 = sprintf("%.1f",$request['two_thr_im2']);
        $two_thr_rn = sprintf("%.1f",$request['two_thr_rn']);
        $two_thr_r42 = sprintf("%.1f",$request['two_thr_r42']);
        $two_four_e = sprintf("%.1f",$request['two_four_e']);
        $two_four_r4 = sprintf("%.1f",$request['two_four_r4']);
        $two_four_rn4 = sprintf("%.1f",$request['two_four_rn4']);
        $two_four_r3 = sprintf("%.1f",$request['two_four_r3']);


        $thr_one_r1 = sprintf("%f",$request['thr_one_r1']);
        $thr_one_ix = sprintf("%f",$request['thr_one_ix']);
        $thr_one_ds = sprintf("%f",$request['thr_one_ds']);
        $thr_two_r2 = sprintf("%f",$request['thr_two_r2']);
        $thr_two_vx = sprintf("%f",$request['thr_two_vx']);
        $thr_two_ds = sprintf("%f",$request['thr_two_ds']);
        $thr_thr_r4 = sprintf("%f",$request['thr_thr_r4']);
        $thr_thr_r3 = sprintf("%f",$request['thr_thr_r3']);
        $thr_thr_rx = sprintf("%f",$request['thr_thr_rx']);
        $thr_thr_ds = sprintf("%f",$request['thr_thr_ds']);


        $four_one_r1 = sprintf("%f",$request['four_one_r1']);
        $four_one_r2 = sprintf("%f",$request['four_one_r2']);
        $four_one_r3 = sprintf("%f",$request['four_one_r3']);
        $four_one_r4 = sprintf("%f",$request['four_one_r4']);
        $four_one_ix = sprintf("%f",$request['four_one_ix']);

        $four_two_1 = $request['four_two_1'];
        $four_two_2 = $request['four_two_2'];
        $four_two_3 = $request['four_two_3'];
        $four_two_4 = $request['four_two_4'];
        $four_two_5 = $request['four_two_5'];


        $student_id = $request['student_id'];




        $res1 = Completion11::establish(
            $one_ig,
            $one_rg,
            $one_e,
            $two_one_r1gs,
            $two_one_r1,
            $two_two_rn,
            $two_two_im,
            $two_two_r2gs,
            $two_two_vm,
            $two_two_im2,
            $two_two_rn2,
            $two_two_r2,
            $two_thr_r4,
            $two_thr_e,
            $two_thr_im2,
            $two_thr_rn,
            $two_thr_r42,
            $two_four_e,
            $two_four_r4,
            $two_four_rn4,
            $two_four_r3,
            $thr_one_r1,
            $thr_one_ix,
            $thr_one_ds,
            $thr_two_r2,
            $thr_two_vx,
            $thr_two_ds,
            $thr_thr_r4,
            $thr_thr_r3,
            $thr_thr_rx,
            $thr_thr_ds,
            $four_one_r1,
            $four_one_r2,
            $four_one_r3,
            $four_one_r4,
            $four_one_ix,
            $four_two_1,
            $four_two_2,
            $four_two_3,
            $four_two_4,
            $four_two_5,

            $student_id
        );

        $grade = 0;
        $grade_xp = 0;

        if ($one_ig == 500.0) {
            $grade += 2;
        }
        if ($one_rg == 560.0) {
            $grade += 2;
        }
        if ($one_e == 1.5) {
            $grade += 2;
        }

        if ($two_one_r1gs == "Ig/(Im-Ig)") {
            $grade += 3;
        }

        if ($two_one_r1 == 29.5) {
            $grade += 3;
        }
        if ($two_two_rn == 28.0) {
            $grade += 3;
        }
        if ($two_two_im == 10.0) {
            $grade += 3;
        }
        if ($two_two_r2gs == "Vm/Im-Rn") {
            $grade += 3;
        }
        if ($two_two_vm == 5.0) {
            $grade += 3;
        }
        if ($two_two_im2 == 10.0) {
            $grade += 3;
        }
        if ($two_two_rn2 == 28.0) {
            $grade += 3;
        }

        if ($two_two_r2 == 472.0) {
            $grade += 3;
        }
        if ($two_thr_r4 == "E/Im-Rn") {
            $grade += 3;
        }
        if ($two_thr_e == 1.5) {
            $grade += 3;
        }
        if ($two_thr_im2 == 10.0) {
            $grade += 3;
        }
        if ($two_thr_rn == 28.0) {
            $grade += 3;
        }
        if ($two_thr_r42 == 122.0) {
            $grade += 3;
        }

        if ($two_four_e == 1.5) {
            $grade += 3;
        }
        if ($two_four_r4 == 122.0) {
            $grade += 3;
        }
        if ($two_four_rn4 == 28.0) {
            $grade += 3;
        }
        if ($two_four_r3 == 60.0) {
            $grade += 3;
        }

        if ($thr_one_r1 == 29.5) {
            $grade += 3;
        }
        if ($thr_one_ix >= 2.0 && $thr_one_ix <= 8.0) {
            $grade += 3;
        }

        if ($thr_one_ds >= 20.0 && $thr_one_ds <= 80.0) {
            $grade += 3;
        }
        if ($thr_two_r2 == 472.0) {
            $grade += 3;
        }
        if ($thr_two_vx >= 1.2 && $thr_two_vx <= 4.0) {
            $grade += 3;
        }
        if ($thr_two_ds >= 20.0 && $thr_two_ds <= 80.0) {
            $grade += 3;
        }
        if ($thr_thr_r4 >= 121.5 && $thr_thr_r4 <= 122.5) {
            $grade += 3;
        }
        if ($thr_thr_r3 >= 60.0 && $thr_thr_r3 <= 63.0) {
            $grade += 3;
        }
        if ($thr_thr_rx >= 15.0 && $thr_thr_rx <= 200.0) {
            $grade += 3;
        }
        if ($thr_thr_ds >= 15.0 && $thr_thr_ds <= 200.0) {
            $grade += 3;
        }


        if ($four_one_r1 == 29.5) {
            $grade += 1;
        }
        if ($four_one_r2 == 472.0) {
            $grade += 1;
        }
        if ($four_one_r3 == 61.0) {
            $grade += 1;
        }
        if ($four_one_r4 == 122.1) {
            $grade += 1;
        }
        if ($four_one_ix >= 5.9 && $four_one_ix <= 6.3) {
            $grade += 1;
        }


        if($four_two_1 == 0)
        {
            $grade_xp += 1;
        }
        if($four_two_2 == 1)
        {
            $grade_xp += 1;
        }
        if($four_two_3 == 0)
        {
            $grade_xp += 1;
        }
        if($four_two_4 == 1)
        {
            $grade_xp += 1;
        }
        if($four_two_5 == 0)
        {
            $grade_xp += 1;
        }


        $grade = $grade + $grade_xp;



        $res2 = Student::grade($student_id, $grade,$grade_xp);


        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }
}

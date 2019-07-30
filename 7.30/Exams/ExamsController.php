<?php

namespace App\Http\Controllers\Exams;

use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Exams;

class ExamsController extends Controller
{
    //
    function index(){
        //接值
        $uname = \request()->get('uname');


        //定义一个空数组
        $where = [];
        //搜索
        if ($uname){
            $where[] = ['uname','like','%'.$uname.'$'];
        }
        $res = Exams::where($where)->paginate(3);
        //渲染模板
        return view('exams/index',['res'=>$res]);
    }

    function add(){
        return view('exams/add');
    }

    function add_do(Request $request){

        $input = $this->validate($request, [
            'uname' => 'required',
            'bianhao' => 'required',
            'shenfen' => 'required',
            'sex' => 'required',
            'danwei' => 'required',
        ]);
        //实例化对象
        $objExams = new Exams();
        //接收传过来的数据
        $objExams->uname = $input['uname'];
        $objExams->bianhao = $input['bianhao'];
        $objExams->shenfen = $input['shenfen'];
        $objExams->sex = $input['sex'];
        $objExams->danwei = $input['danwei'];

        $objExams->save();
        //展示到页面
        return redirect('exams/index');
    }

    function del(){
        //接id
        $id = \request()->get('id');
        //一条数据
        $objExams = Exams::find($id);
        //删除
        $res = $objExams->delete();
        //判断是否成功
        if ($res){
            return response()->json(['stutes'=>200,'msg'=>'删除成功']);
        }else{
            return response()->json(['stutes'=>0,'msg'=>'删除失败']);

        }
    }
}

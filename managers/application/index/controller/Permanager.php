<?php
namespace app\index\controller;
use think\Controller;
include 'DbManager.php';
class Permanager extends Controller
{
	
    public function woker()
    {	
        $list = search_all('woker');
        $this->assign('woker',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('woker',$id);
            if($status){
                return $this->success('删除成功','woker',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('woker');
            if($status){
                return $this->success('删除成功','woker',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        return $this->fetch();
    }

    public function home()
    {	
        $list = search_all('home');
        $this->assign('home',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('home',$id);
            if($status){
                return $this->success('删除成功','home',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('home');
            if($status){
                return $this->success('删除成功','home',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }	

    public function paper()
    {	
        $list = search_all('card');
        $this->assign('paper',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('card',$id);
            if($status){
                return $this->success('删除成功','paper',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('card');
            if($status){
                return $this->success('删除成功','paper',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }	

    public function baby()
    {	
        $list = search_all('baby');
        $this->assign('baby',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('baby',$id);
            if($status){
                return $this->success('删除成功','baby',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('baby');
            if($status){
                return $this->success('删除成功','baby',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }	

     public function job()
    {	
        $list = search_all('jobinfo');
        $this->assign('job',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('jobinfo',$id);
            if($status){
                return $this->success('删除成功','job',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('jobinfo');
            if($status){
                return $this->success('删除成功','job',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function skill()
    {	
        $list = search_all('skill');
        $this->assign('skill',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('skill',$id);
            if($status){
                return $this->success('删除成功','skill',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('skill');
            if($status){
                return $this->success('删除成功','skill',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function job_paper()
    {	
        $list = search_all('jobpaper');
        $this->assign('jobpaper',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('jobpaper',$id);
            if($status){
                return $this->success('删除成功','job_paper',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('jobpaper');
            if($status){
                return $this->success('删除成功','job_paper',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        return $this->fetch();
    }

    public function dinner()
    {	
         $list = search_all('dinner');
        $this->assign('dinner',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('dinner',$id);
            if($status){
                return $this->success('删除成功','dinner',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('dinner');
            if($status){
                return $this->success('删除成功','dinner',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }
	
	public function mpf()
    {	
        $list = search_all('mpf');
        $this->assign('mpf',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('mpf',$id);
            if($status){
                return $this->success('删除成功','mpf',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('mpf');
            if($status){
                return $this->success('删除成功','mpf',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function insurance()
    {	
        $list = search_all('insurance');
        $this->assign('insurance',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('insurance',$id);
            if($status){
                return $this->success('删除成功','insurance',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('insurance');
            if($status){
                return $this->success('删除成功','insurance',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function train()
    {	
        $list = search_all('train');
        $this->assign('train',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('train',$id);
            if($status){
                return $this->success('删除成功','train',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('train');
            if($status){
                return $this->success('删除成功','train',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function subside()
    {	
         $list = search_all('subside');
        $this->assign('subside',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('subside',$id);
            if($status){
                return $this->success('删除成功','subside',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('subside');
            if($status){
                return $this->success('删除成功','subside',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function reward()
    {	
        $list = search_all('welfare');
        $this->assign('welfare',$list);
        $id = input('id');
        $delall = input('delall');
        if($id){
            $status = del_one('welfare',$id);
            if($status){
                return $this->success('删除成功','reward',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
        if($delall){
            $status = del_all('welfare');
            if($status){
                return $this->success('删除成功','reward',3);   
            }else{
                return $this->success('删除失败');   
            }
        }
    	return $this->fetch();
    }

    public function worker_update(){
        $id = input('ids');
        $info = db('woker')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('post.name'),
                     'sex' => input('sex'),
                     'birthday' => input('birthday'),
                     'nation' => input('nation'),
                     'num' => input('num'),
                     'card' => input('card'),
                     'residence' => input('residence'),
                     'dinner' => input('dinner'),
                     'strength' => input('strength'),
                     'edu' => input('edu'),
                     'school' => input('school'),
                     'phone' => input('phone'),
                     'email' => input('email'),
                     'raddress' => input('raddress'),
                     'naddress' => input('naddress'),
                     'branch' => input('branch'),
                     'native' => input('native'),
                     'politic' => input('politic'),
                     'marriage' => input('marriager')
                    ];
                $request = db('woker')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','woker',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function train_update(){
        $id = input('ids');
        $info = db('train')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('post.name'),
                     'num' => input('num'),
                     'tname' => input('tname'),
                     'ttime' => input('ttime'),
                     'thonor' => input('thonor')
                    ];
                $request = db('train')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','train',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

      public function insurance_update(){
        $id = input('ids');
        $info = db('insurance')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'buy' => input('buy'),
                     'stop' => input('stop'),
                     'cnum' => input('cnum')
                    ];
                $request = db('insurance')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','insurance',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function mpf_update(){
        $id = input('ids');
        $info = db('mpf')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'buy' => input('buy'),
                     'stop' => input('stop')
                    ];
                $request = db('mpf')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','mpf',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

     public function dinner_update(){
        $id = input('ids');
        $info = db('dinner')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'type' => input('type'),
                     'cid' => input('cid'),
                     'new' => input('new'),
                    ];
                $request = db('dinner')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','dinner',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function subside_update(){
        $id = input('ids');
        $info = db('subside')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'sname' => input('sname'),
                     'stime' => input('stime'),
                     'snum' => input('snum')
                    ];
                $request = db('subside')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','subside',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

     public function reward_update(){
        $id = input('ids');
        $info = db('welfare')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'pname' => input('sname'),
                     'ptime' => input('stime'),
                     'ptype' => input('snum'),
                     'cname' => input('cname'),
                     'ctime' => input('ctime'),
                     'ctype' => input('ctype')
                    ];
                $request = db('welfare')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','reward',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function jobpaper_update(){
        $id = input('ids');
        $info = db('jobpaper')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'btime' => input('btime'),
                     'gtime' => input('gtime'),
                     'stime' => input('stime')
                    ];
                $request = db('jobpaper')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','job_paper',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function skill_update(){
        $id = input('ids');
        $info = db('skill')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'skill' => input('skill'),
                     'rank' => input('rank'),
                     'fnum' => input('fnum'),
                     'cnum' => input('cnum')
                    ];
                $request = db('skill')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','skill',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function job_update(){
        $id = input('ids');
        $info = db('jobinfo')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'entry' => input('entry'),
                     'dimission' => input('dimission'),
                     'historic' => input('historic')
                    ];
                $request = db('jobinfo')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','job',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function baby_update(){
        $id = input('ids');
        $info = db('baby')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'baby' => input('baby'),
                     'chopital' => input('chopital'),
                     'fhospital' => input('fhospital'),
                     'fpc' => input('fpc'),
                     'operation' => input('operation')
                    ];
                $request = db('baby')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','baby',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

    public function paper_update(){
        $id = input('ids');
        $info = db('card')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'organization' => input('organization'),
                     'htime' => input('htime'),
                     'hold' => input('hold'),
                     'etime' => input('etime'),
                     'number' => input('number'),
                     'census' => input('census'),
                     'measure' => input('measure'),
                     'phone' => input('phone'),
                     'address' => input('address'),
                     'ctime' => input('ctime'),
                     'type' => input('type'),
                    ];
                $request = db('card')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','paper',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }

     public function home_update(){
        $id = input('ids');
        $info = db('home')->where('id',$id)->select();
        $this->assign('info',$info);
        if(request()->isPost()){
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'fname' => input('fname'),
                     'fwork' => input('fwork'),
                     'fphone' => input('fphone'),
                     'mname' => input('mname'),
                     'mwork' => input('mwork'),
                     'mphone' => input('mphone'),
                     'pphone' => input('pphone'),
                     'cname' => input('cname'),
                     'cage' => input('cage'),
                     'csex' => input('csex'),
                     'cphone' => input('cphone'),
                     'sname' => input('sname'),
                     'sphone' => input('sphone'),
                    ];
                $request = db('home')->where('id',input('id'))->update($data);
            if($request)
                return $this->success('修改成功','home',3);
            else
                return $this->error('失败');
        }
        return $this->fetch();
    }


}

<?php  
namespace app\home\controller;  
use think\Request;  
use think\controller\Rest;  
  
class Recruit extends Rest{  
    public function rest(){  
        switch ($this->method){  
            case 'get':     //��ѯ  
                $this->read($id);  
                break;  
            case 'post':    //����  
                $this->add();  
                break;  
            case 'put':     //�޸�  
                $this->update($id);  
                break;  
            case 'delete':  //ɾ��  
                $this->delete($id);  
                break;  
              
        }  
    }  
    public function read(){  
        $model = model('Recruit');  
        //$data = $model::get($id)->getData();  
        //$model = new NewsModel();  
        $data=$model->where('telephone', '13603034976')->find();// ��ѯ��������  
        return json($data);  
    }  
      
    public function add(){  
        $model = model('News');  
        $param=Request::instance()->param();//��ȡ��ǰ��������б������������ˣ�  
        if($model->save($param)){  
            return json(["status"=>1]);  
        }else{  
            return json(["status"=>0]);  
        }  
    }  
    public function update($id){  
        $model = model('News');  
        $param=Request::instance()->param();  
        if($model->where("id",$id)->update($param)){  
            return json(["status"=>1]);  
        }else{  
            return json(["status"=>0]);  
        }  
    }  
    public function delete($id){  
          
        $model = model('News');  
        $rs=$model::get($id)->delete();  
        if($rs){  
            return json(["status"=>1]);  
        }else{  
            return json(["status"=>0]);  
        }  
    }  
}  
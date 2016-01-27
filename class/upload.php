<?php
class upload{
    private $files;
    public function getFiles($p){
        $this->files = $p;
    }
    public function start($dir = ''){
        $codeFor = count($this->files);
        
        for($i=0; $i<$codeFor; ++$i){
            $name = $this->files['name'][$i];
            $tmpName = $this->files['tmp_name'][$i];
            
            if(!empty($name)){
                @$newName = substr(md5(uniqid(rand(), true)), 3, 6) . '.' . end(explode('.', $name));
                move_uploaded_file($tmpName, $dir.$newName);
            }
        }
    }
}    
?>
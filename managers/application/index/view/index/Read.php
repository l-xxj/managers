<?php
 public function output(){
       $data = "查询出数组";
        Vendor('phpexcel.PHPExcel');//调用类库,路径是基于vendor文件夹的
        Vendor('phpexcel.PHPExcel.Worksheet.Drawing');
        Vendor('phpexcel.PHPExcel.Writer.Excel2007');
        $objExcel = new \PHPExcel();
        //set document Property
        $objWriter = \PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');

        $objActSheet = $objExcel->getActiveSheet();
        $key = ord("A");
        $letter =explode(',',"A,B,C,D,E,F,G,H");
        $arrHeader =  array('用户名','密码','创建时间','邮箱','序号');
        //填充表头信息
        $lenth =  count($arrHeader);
        for($i = 0;$i < $lenth;$i++) {
            $objActSheet->setCellValue("$letter[$i]1","$arrHeader[$i]");
        };
        //填充表格信息
        foreach($data as $k=>$v){
            $k +=2;
            // // 图片生成
            // $objDrawing[$k] = new \PHPExcel_Worksheet_Drawing();
            // $objDrawing[$k]->setPath('public/static/admin/images/profile_small.jpg');
            // // 设置宽度高度
            // $objDrawing[$k]->setHeight(40);//照片高度
            // $objDrawing[$k]->setWidth(40); //照片宽度
            // /*设置图片要插入的单元格*/
            // $objDrawing[$k]->setCoordinates('C'.$k);
            // // 图片偏移距离
            // $objDrawing[$k]->setOffsetX(30);
            // $objDrawing[$k]->setOffsetY(12);
            // $objDrawing[$k]->setWorksheet($objPHPExcel->getActiveSheet());
            // 表格内容
            $objActSheet->setCellValue('C'.$k, $v['username']);
            $objActSheet->setCellValue('D'.$k, $v['pwd']);
            $objActSheet->setCellValue('E'.$k, $v['cre_time']);
            $objActSheet->setCellValue('F'.$k, $v['email']);
            $objActSheet->setCellValue('G'.$k, $v['id']);



            // 表格高度
            $objActSheet->getRowDimension($k)->setRowHeight(20);
        }

        $width = array(20,20,15,10,10,30,10,15);
        //设置表格的宽度
        $objActSheet->getColumnDimension('A')->setWidth($width[0]);
        $objActSheet->getColumnDimension('B')->setWidth($width[3]);
        $objActSheet->getColumnDimension('C')->setWidth($width[5]);
        $objActSheet->getColumnDimension('D')->setWidth($width[3]);
        $objActSheet->getColumnDimension('E')->setWidth($width[3]);
        $objActSheet->getColumnDimension('F')->setWidth($width[3]);
        $objActSheet->getColumnDimension('G')->setWidth($width[3]);
        $objActSheet->getColumnDimension('H')->setWidth($width[5]);


        $outfile = "导出测试".date("Y-m-d").".xls";
        ob_end_clean();
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header('Content-Disposition:inline;filename="'.$outfile.'"');
        header("Content-Transfer-Encoding: binary");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        $objWriter->save('php://output');
    }


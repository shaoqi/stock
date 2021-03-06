<?php
return array(
    'zm' => array(
        'title' => '照明',
        'range' => array('bright', 'ctemp', 'voltage'),
        'data' => array(
                    array('name' => '物料代码', 'alias'=>'code', 'width'=>''),
                    array('name' => '生产批号', 'alias'=>'pno', 'width'=>''),
                    array('name' => '产品型号', 'alias'=>'model', 'width'=>''),
                    array('name' => '规格', 'alias'=>'spec', 'width'=>''),
                    array('name' => 'Bin号', 'alias'=>'bin', 'width'=>''),
                    array('name' => '分光电流(MA)', 'alias'=>'current', 'width'=>''),
                    array('name' => '色区代码', 'alias'=>'ccode', 'width'=>''),
                    array('name' => '亮度(LM)', 'alias'=>'bright', 'width'=>''),
                    array('name' => '色温(K)', 'alias'=>'ctemp', 'width'=>''),
                    array('name' => '电压(V)', 'alias'=>'voltage', 'width'=>''),
                    array('name' => '显指(RA)', 'alias'=>'index', 'width'=>''),
                    array('name' => '数量(K)', 'alias'=>'total', 'width'=>''),
                    array('name' => '仓位', 'alias'=>'postions', 'width'=>''),
                    ),
           'serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'ctemp'=>false,'voltage'=>false),
           'info_serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'ctemp'=>false,'voltage'=>false),
            ),
    'zs' => array(
        'title' => '指示',
        'range' => array('bright', 'tone', 'voltage'),
        'data' => array(
                    array('name' => '物料代码', 'alias'=>'code', 'width'=>''),
                    array('name' => '生产批号', 'alias'=>'pno', 'width'=>''),
                    array('name' => '产品型号', 'alias'=>'model', 'width'=>''),
                    array('name' => '规格', 'alias'=>'spec', 'width'=>''),
                    array('name' => 'Bin号', 'alias'=>'bin', 'width'=>''),
                    array('name' => '分光电流(MA)', 'alias'=>'current', 'width'=>''),
                    array('name' => '亮度(mcd)', 'alias'=>'bright', 'width'=>''),
                    array('name' => '颜色(nm)', 'alias'=>'tone', 'width'=>''),
                    array('name' => '电压(V)', 'alias'=>'voltage', 'width'=>''),
                    array('name' => '数量(K)', 'alias'=>'total', 'width'=>''),
                    array('name' => '仓位', 'alias'=>'postions', 'width'=>''),
                    ),
            'serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'tone'=>false,'voltage'=>false),
            'info_serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'tone'=>false,'voltage'=>false),
            ),
    'xs' => array(
        'title' => '显示',
        'range' => array('r_wavelength', 'g_wavelength', 'b_wavelength',
                         'r_bright', 'g_bright', 'b_bright',
                         'r_voltage', 'g_voltage', 'b_voltage'),
        'data' => array(
                    array('name' => '物料代码', 'alias'=>'code', 'width'=>''),
                    array('name' => '生产批号', 'alias'=>'pno', 'width'=>''),
                    array('name' => '产品型号', 'alias'=>'model', 'width'=>''),
                    array('name' => '规格', 'alias'=>'spec', 'width'=>''),
                    array('name' => 'Bin号', 'alias'=>'bin', 'width'=>''),
                    array('name' => 'R:波长', 'alias'=>'r_wavelength', 'width'=>''),
                    array('name' => 'G:波长', 'alias'=>'g_wavelength', 'width'=>''),
                    array('name' => 'B:波长', 'alias'=>'b_wavelength', 'width'=>''),
                    array('name' => 'R:亮度', 'alias'=>'r_bright', 'width'=>''),
                    array('name' => 'G:亮度', 'alias'=>'g_bright', 'width'=>''),
                    array('name' => 'B:亮度', 'alias'=>'b_bright', 'width'=>''),
                    array('name' => 'R:电压', 'alias'=>'r_voltage', 'width'=>''),
                    array('name' => 'G:电压', 'alias'=>'g_voltage', 'width'=>''),
                    array('name' => 'B:电压', 'alias'=>'b_voltage', 'width'=>''),
                    array('name' => '数量(K)', 'alias'=>'total', 'width'=>''),
                    array('name' => '仓位', 'alias'=>'postions', 'width'=>''),
                    ),
        'serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE),
        'info_serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'r_wavelength'=>false,'r_bright'=>false,'r_voltage'=>false,),
            ),
    'bg' => array(
        'title' => '背光',
        'range' => array('bright', 'ctemp', 'voltage'),
        'data' => array(
                    array('name' => '物料代码', 'alias'=>'code', 'width'=>''),
                    array('name' => '生产批号', 'alias'=>'pno', 'width'=>''),
                    array('name' => '产品型号', 'alias'=>'model', 'width'=>''),
                    array('name' => '规格', 'alias'=>'spec', 'width'=>''),
                    array('name' => 'Bin号', 'alias'=>'bin', 'width'=>''),
                    array('name' => '分光电流(MA)', 'alias'=>'current', 'width'=>''),
                    array('name' => '色区代码', 'alias'=>'ccode', 'width'=>''),
                    array('name' => '亮度(LM)', 'alias'=>'bright', 'width'=>''),
                    array('name' => '色温(K)', 'alias'=>'ctemp', 'width'=>''),
                    array('name' => '电压(V)', 'alias'=>'voltage', 'width'=>''),
                    array('name' => '显指(RA)', 'alias'=>'index', 'width'=>''),
                    array('name' => '数量(K)', 'alias'=>'total', 'width'=>''),
                    array('name' => '仓位', 'alias'=>'postions', 'width'=>''),
                    ),
            'serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'ctemp'=>false,'voltage'=>false),
            'info_serach' => array('code'=>RIGHT_LIKE,'pno'=>RIGHT_LIKE,'model'=>RIGHT_LIKE,'bright'=>false,'ctemp'=>false,'voltage'=>false),
            ),
        );

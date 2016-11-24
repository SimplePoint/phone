<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
    	'__PUBLIC__' 		 => __ROOT__.'/PUBLIC', // 更改默认的/Public 替换规则
    	'__JS__'     		 => __ROOT__.'/Public/Home/js/', // 增加新的JS类库路径替换规则
    	'__CSS__'		 	 => __ROOT__.'/Public/Home/css/', // 增加新的css上传路径替换规则
    	'__IMAGE__'		 	 => __ROOT__.'/Public/Home/image/',
    	'__LIBS__'		 	 => __ROOT__.'/Public/Home/libs/',
    	'__UPLOAD__'		 => __ROOT__.'/Public/Upload',
	)
);
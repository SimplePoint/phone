<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
    	'__PUBLIC__' 		 => __ROOT__.'/PUBLIC', // 更改默认的/Public 替换规则
    	'__JS__'     		 => __ROOT__.'/Public/Admin/js', // 增加新的JS类库路径替换规则
    	'__CSS__'		 	 => __ROOT__.'/Public/Admin/css', // 增加新的css上传路径替换规则
    	'__IMAGE__'		 	 => __ROOT__.'/Public/Admin/image',
    	'__LIBS__'		 	 => __ROOT__.'/Public/Admin/libs',
    	'__UPLOAD__'		 => __ROOT__.'/Public',
	)
);
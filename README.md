# ibos
* 这个需求，直接使用第三方的 querylist 插件实现
* 数据内容不是特别大，直接使用 file_put_content 写入 csv 文件，即可。如果数据大的，考虑用 fwrite 这种，分拆出来写

## 使用方式：
```
cd project_path/test
/usr/local/php/bin/php scrape.php 	// 会在同级目录下生成 csv 文件
```

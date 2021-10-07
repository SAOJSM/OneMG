__Please read the descriptions of settings before raising an issue__

__請將設置中所有的設置項的說明都讀一遍，有些問題就不用問了。__

# 注意事項
若要使用onedrive
請修改 https://github.com/SAOJSM/OneMG/tree/master/disk 內onedrive相關檔案client_id和client_secret為自己的
用我的有機率無法取得refresh_token

# 取得自己的client_id和client_secret

1.先到這個網址 (https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade) 註冊新應用

redirect_uri = https://saojsm.github.io/Brian-Onemg

2.切換到 Certificates & secrets 頁籤, 創建 client secret , 複製client_id、client_secret

3.切換到 API permissions 頁籤, 增加offline_access, Files.Read, Files.Read.All權限

# Deploy to Glitch  
Official: https://glitch.com/  
Demo: https://onemanager.glitch.me/  

How to Install: New Project -> Import form Github -> paste "https://github.com/SAOJSM/OneMG", after done, Show -> In a New Window.  


# Deploy to Vercel  
Official: https://vercel.com/
Demo: null  
Notice: 
> 1, you must wait 30-50s to make sure deploy READY after change config;  
> 2, the max size of environment is 4k, so you can add 3 onedrive or less;  
> 3, Vercel limit 100 deploy every day.  

How to Install: https://scfonedrive.github.io/Vercel/Deploy.html .  

# Deploy to Virtual Private Server (VPS 或空間)  
DEMO:  無  
How to Install:  
    1.Start web service on your server (httpd or other), make sure you can visit it.  
    啟動web服務器，確保你能訪問。  
    2.Make the rewrite works, the rule is in .htaccess file, make sure any query redirect to index.php.  
    開啟偽靜態(重寫)功能，規則在.htaccess文件中，nginx從裡面複製，我們的目的是不管訪問什麽都讓index.php來處理。  
    3.Upload code.  
    上傳代碼。  
    4.Change the file .data/config.php can be read&write (666 is suggested).  
    使web身份可讀寫代碼中的.data/config.php文件，推薦chmod 666 .data/config.php。  
    5.View the website in chrome or other.  
    在瀏覽器中訪問。  


# Features 特性  
When downloading files, the program produce a direct url, visitor download files from MS OFFICE via the direct url, the server expend a few bandwidth in produce.  
下載時，由程序解析出直鏈，瀏覽器直接從微軟Onedrive服務器下載文件，服務器只消耗與微軟通信的少量流量。  

When uploading files, the program produce a direct url, visitor upload files to MS OFFICE via the direct url, the server expend a few bandwidth in produce.  
上傳時，由程序生成上傳url，瀏覽器直接向微軟Onedrive的這個url上傳文件，服務器只消耗與微軟通信的少量流量。  

The XXX_path in setting is the path in Onedrive, not in url, program will find the path in Onedrive.  
設置中的 XXX_path 是Onedrive里面的路徑，並不是你url里面的，程序會去你Onedrive里面找這個路徑。  

LOGO ICON: put your 'favicon.ico' in the path you showed, make sure xxxxx.com/favicon.ico can be visited.   
網站圖標：將favicon.ico文件放在你要展示的目錄中，確保 xxxxx.com/favicon.ico 可以訪問到。  

Program will show content of 'readme.md' & 'head.md'.  
可以在文件列表顯示head.md跟readme.md文件的內容。  

guest up path, is a folder that the guest can upload files, but can not be list (exclude admin).  
遊客上傳目錄（也叫圖床目錄），是指定一個目錄，讓遊客可以上傳文件，不限格式，不限大小。這個目錄里面的內容不列清單（除非管理登錄）。  

If there is 'index.html' file, program will only show the content of 'index.html', not list the files.  
如果目錄中有index.html文件，只會輸出顯示html文件，不顯示程序框架。  

Click 'EditTime' or 'Size', the list will sort by time or size, Click 'File' can resume sort.  
點擊“時間”、“大小”，可以排序顯示，點“文件”恢覆原樣。  

# Functional files 功能性文件  
### favicon.ico  
put it in the showing home folder of FIRST disk (maybe not root of onedrive). 放在第一個盤的顯示目錄（不一定是onedrive根目錄）。  
### index.html  
show content of index.html as html. 將index.html以靜態網頁顯示出來。  
### head.md readme.md  
it will showed at top or bottom as markdown. 以MD語法顯示在頂部或底部。  
### head.omf foot.omf  
it will showed at top or bottom as html (javascript works!). 以html顯示在頂部或底部（可以跑js）。  

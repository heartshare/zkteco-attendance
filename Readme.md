## Enable from php ini
php_sockets.dll 

## Run cron job in windows task scheduler

You will need a shellscript to run chronically, using Windows Task Scheduler. Also you will need a batch script (script.bat) to call the php.exe and run your php script (here called as my_process.php)

shellscript.vbs

Set WinScriptHost = CreateObject("WScript.Shell")
WinScriptHost.Run Chr(34) & "C:\path\to\script\script.bat" & Chr(34), 0
Set WinScriptHost = Nothing
script.bat

"C:\wamp\bin\php\php5.4.12\php.exe" -f "C:\wamp\www\website\my_process.php"
Now, we are ready to set the Windows Task Scheduler to run shellscript.vbs at the required time interval:

1. Open Task Scheduler from windows Start menu
2. Go to Action menu and hit Create Task...
3. in General tab, fill the Name and Description fields as you want
4. in Triggers tab, hit New button. From Begin the Task dropdown, select On a schedule and choose Daily, From Advanced settings section, select Repeat task every as you want and set for a duration on Indefinitely.
5. on Actions tab, from Action dropdown, select Start a program. on the Program\script box, enter path to shellscript.vbs like C:\path\to\shellscript.vbs.
6. in Conditions tab, in Power section, unchecked "Start the task only if the computer in on AC Power"
# Codeigniter Ajax LobiAdmin Theme with dynamic menu
Full functional Ajax Admin Theme with Codeigniter 4. Completely functional user registration, login and lock screen system.


## Features
* User Registration
* User Login
* Auto-lock screen after 2 minutes
* Dynamic multiple menus
* Also whole features of [LobiAdmin](https://lobianijs.com/lobiadmin/version/1.0/ajax/#dashboard)


## Installation
* Download and unzip all files.
* Create a database and import **cl_ajax.sql.zip** file
* Run this application using your localhost or simply run command `php spark serve`
* Login username `admin` and passwork `123456`


## More information
Auto-lock screen code

```javascript
$(function() {

    function timeChecker() {
        setInterval(function() {
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
            timeCompare(storedTimeStamp);
        }, 3000);
    }


    function timeCompare(timeString) {
        var maxMinutes = 1; //GREATER THEN 1 MIN.
        var currentTime = new Date();
        var pastTime = new Date(timeString);
        var timeDiff = currentTime - pastTime;
        var minPast = Math.floor((timeDiff / 60000));

        if (minPast > maxMinutes) {
            sessionStorage.removeItem("lastTimeStamp");
            window.location = baseURL + "users/autoLogout";
            return false;
        } else {
            //JUST ADDED AS A VISUAL CONFIRMATION
            console.log(currentTime + " - " + pastTime + " - " + minPast + " min past");
        }
    }

    if (typeof(Storage) !== "undefined") {
        $(document).mousemove(function() {
            var timeStamp = new Date();
            sessionStorage.setItem("lastTimeStamp", timeStamp);
        });

        timeChecker();
    }
});
```




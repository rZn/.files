<?php 

// Logarr config file
// https://github.com/Monitorr/logarr


                            // Last updated: 12 FEB 2018 //
                                    // v4.0.0  //


             // ** DO NOT edit the config.SAMPLE-DATE.php file ** //

// The required config.php file will be automatically generated from the config.sample-DATE.php file upon first browser hit to index.php
// If for some reason, that file is NOT automatically generated, COPY the config.sample-DATE-.php file to config.php. DO NOT REMOVE THE THE config.sample-date.php file. 
// If there are code changes (which are rare) that require changes to your local config.php, changes will be published on the remote Github/Dockerhub repo as a NEW config.sample-DATE.php file.
// This file will then be copied to your local repo when updating via GIT and/or the Logarr UI.
// After the updated sample.config-DATE.php file has been copied to your local repo, rename your old config file to config.old.php, copy the new config.sample-date.php file to config.php and insert your personalized values from your config.old.php into the newly created config.php file. Again, this is only needed IF there are changes to the config.php file. For normal base code changes, simply use the UI and/or GIT to update. 


$config = array(

// ** Change Logarr site settings BELOW this line **

    'title' => 'Logarr', // Site Title

    'timezone' => 'UTC',   // Timezone used for UI clock. IF on Linux, this is automatically generated. If on Windows, set this to a preferred value, or the default timezone of UTC will be used. 
        // timezone note 1: timezone format: ($timezone = 'America/Los_Angeles',) Timezones are listed here: https://php.net/manual/en/timezones.php

    'rftime' => '5000', // Time display update interval (in milliseconds)

    'rflog' => '30000', // Log auto-update interval (in milliseconds) when enabled via toggle switch in UI.
        // rflog note 1: Set this value with the size of your logs as a deciding factor. If set too low (below ~10000ms), your browser will crash.
        // rflog note 2: During log update, the browser will have NO response. 

    'updateBranch' => 'docker', // update branch you wish to use when updating via the Logarr GUI // "master" or "develop"

// ** Change Logarr site settings ABOVE this line **

    );

$logs = array(

    // ** Log paths are CASE SENSITIVE in a MS Windows environment **
    // Ensure correct permissions are set on the target log file
    // Ensure the logging applications' settings are set to "roll over/refresh" the log files at regular intervals
    // Depending on your environment, large log files could cause your webserver to crash.
    // Recommended individual log files be NO MORE than ~3MB in size  
    // If this page is exposed to your WAN, check the logging applications' settings for sensitive data within logs

    // Log path example: "NameOfLog" =>'C:/link/to/log/file'

// ** Add Logs BELOW this line **


    "Sonarr" => 'C:\ProgramData\nzbdrone\logs\sonarr.txt',

    "Radarr" => 'C:\ProgramData\Radarr\logs\radarr.txt',
    
    "PHP" => 'C:\php\7.1\logs\php.log',


// ** Add Logs ABOVE this line **

);

    // config style adapted from @causeFX and this website: https://www.abeautifulsite.net/a-better-way-to-write-config-files-in-php 

?>

# JSON-logger-for-PHP
Store in a JSON file infos about IP and user_agent of the users that connect to a page

## Instruction
Add the PHP code you see in index.php in every page where you want to log user infos

A single log is stored with the following structure

{
  
    page_visited: "/", 

    time: "2018-02-16 18:58:41", 

    ip_info: {

      "Milan": country:"IT",

      ip:"2.233.71.232",

      loc:"45.4643,9.1895",

      org:"AS12874 Fastweb SpA",

      postal:"20145",

      region:"Lombardy"
    }, 

    browser: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb…L, like Gecko) Chrome/61.0.3163.100 Safari/537.36", 

    referrer: null
  
}

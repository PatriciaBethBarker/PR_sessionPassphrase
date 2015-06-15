# PR_sessionPassphrase
Peer Review of sessionPassphrase


Build a single PHP include file that when referenced in the top of a PHP page will -

  Upon initial page load

  halt all HTML 

  and require entry of a single password (passphrase) via a form

  Match the passphrase to a string stored in the file.  

  Upon successful match, store the passphrase in a session variable

  If the match is unsuccessful, show the form again with feedback for example, "incorrect passphrase"

  Upon successful login, reload the current page to clear the login screen

  Once the page is reloaded, the stored session var is matched to the string.  

  If the string matches, the login screen never again appears for that session!



<?php
// Managing Web Operations: Setting Headers and Performing Redirection
// header(header_string, replace T | F, response_code)

// list of headers: http://en.wikipedia.org/wiki/List_of_HTTP_header_fields

// Used for redirection:
// Location: $url = sets the location to $url (redirects)

// Used to pass non-web files & graphics
// Content-Type: text/html = default
// Content-Type: text/html; charset=UTF-8 = sets type + character set for document
// see http://en.wikipedia.org/wiki/MIME_type for a list of other content types
// Content-Length: nnn = the size in bytes of the attachment
// Content-Disposition: inline; filename=xxx = shows file in web page
// Content-Disposition: attachment; filename=xxx = file is treated as external to the web page
 

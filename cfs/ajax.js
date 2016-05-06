var PAIP_AJAX_REQUEST, PAIP_AJAX_RESPONSE, PAIP_CreateXMLHttpRequest;

PAIP_CreateXMLHttpRequest = function() {
  var err1, err2, err3, error, error1, error2, request;
  request = false;
  try {
    request = new XMLHttpRequest;
  } catch (error) {
    err1 = error;
    try {
      request = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (error1) {
      err2 = error1;
      try {
        request = new ActiveXObject('Microsoft.XMLHTTP');
      } catch (error2) {
        err3 = error2;
        request = false;
      }
    }
  }
  return request;
};

PAIP_AJAX_RESPONSE = function(func) {
  if ((request.readyState === 4) && (request.status === 200)) {
    return func();
  }
};

PAIP_AJAX_REQUEST = function(url, method, responsefunction, async, contype, data) {
  if (async == null) {
    async = true;
  }
  if (contype == null) {
    contype = "application/x-www-form-urlencoded";
  }
  if (data == null) {
    data = "";
  }
  request.open(method, url, async);
  request.setRequestHeader("Content-type", contype);
  request.send(data);
  return request.onreadystatechange = responsefunction;
};

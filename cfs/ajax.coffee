PAIP_CreateXMLHttpRequest = ->
  request = false
  try
    request = new XMLHttpRequest
  catch err1
    try
      request = new ActiveXObject('Msxml2.XMLHTTP')
    catch err2
      try
        request = new ActiveXObject('Microsoft.XMLHTTP')
      catch err3
        request = false
  request
PAIP_AJAX_RESPONSE = (func)->
  if (request.readyState == 4) and (request.status == 200)
    func()
PAIP_AJAX_REQUEST = (url,method,responsefunction,async=true,contype="application/x-www-form-urlencoded",data="") ->
  request.open method,url,async
  request.setRequestHeader "Content-type", contype
  request.send data
  request.onreadystatechange = responsefunction

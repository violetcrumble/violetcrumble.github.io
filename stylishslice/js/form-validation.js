function checkForm() {
	  if (document.subscribeForm.elements['inputName'].value.length < 1) {
	  	alert('Please enter your name.');
	    document.subscribeForm.elements['inputName'].focus();
	  return false;
	} else if (document.subscribeForm.elements['emailAddr'].value.length < 1) {
	  	alert('Please enter your email address.');
	    document.subscribeForm.elements['emailAddr'].focus();
	    return false;
	  } else if (document.subscribeForm.elements['message'].value.length < 1) {
	  	alert('Please enter a message.');
	    document.subscribeForm.elements['message'].focus();
	    return false;}
	  else {
	  return true;
	  }
	}
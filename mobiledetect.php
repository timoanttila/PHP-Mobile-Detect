function isMobile() {
    echo $_SERVER["HTTP_USER_AGENT"] ."<br/>";
    return preg_match("/\b(?:a(?:ndroid|vantgo)|b(?:lackberry|olt|o?ost)|cricket|docomo|hiptop|i(?:emobile|p[ao]d)|kitkat|m(?:ini|obi)|palm|oneplus|(?:i|smart|windows )phone|symbian|up\.(?:browser|link)|tablet(?: browser| pc)|(?:hp-|rim |sony )tablet|w(?:ebos|indows ce|os))/i", $_SERVER["HTTP_USER_AGENT"]);
}

if (isMobile()){
	exit("Mobile Device");
} else {
	exit("Not Mobile Device");
}

function XaD(u){
	var check=document.getElementById(`${u}1`);
	if(check===null){
    var i=document.createElement("IFRAME");
    i.setAttribute("width","65%");
    i.setAttribute("height","215px");
    i.setAttribute("src",`http://yogeshpingle.co.in/copo/loadj.php?t=${u}`);
    i.setAttribute("id",`${u}1`);
    document.getElementById(u).append(i);
}

}

/**
 * Created by MR REWARD.I.L.M on 25/12/2017.
 */

function ticket_calc(){
    var commencingno=document.getElementById('commencing').value;
    var closingno=document.getElementById('closing').value;
    var fare=document.getElementById('fare').value;

    var issued=Number(closingno)-Number(commencingno);
    var total_amount=Number(fare)*Number(issued);

    document.getElementById('issued').value=issued;
    document.getElementById('total_amount').value=total_amount;

}

function kinate(){
	 var price_data= "<?php price_func();?> ";
	 alert(price_data);
	 
	 
	
		
	
}
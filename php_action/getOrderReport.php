<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->

<?php 

require_once '../constant/connect.php';

if($_POST) {

	$startDate = $_POST['startDate'];
//echo $startDate;exit;
	//$date = DateTime::createFromFormat('m/d/Y',$startDate);

	//$start_date = $date->format("m/d/Y");

//echo $date;exit;

	$endDate = $_POST['endDate'];
	//$format = DateTime::createFromFormat('m/d/Y',$endDate);
	//$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM orders WHERE order_date >= '$startDate' AND order_date <= '$endDate' and order_status = 1";
	$query = $connect->query($sql);
 
	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:80%;">
		<tr>
			<th>Order Date</th>
			<th>Client Name</th>
			<th>Contact</th>
			<th>Grand Total</th>
		</tr>

		<tr>';
		$totalAmount = 0;
		while ($result = $query->fetch_assoc()) {
			$sql1 = "SELECT * FROM tbl_client  
          WHERE id = '".$result['client_name']."'";

        $result1 = $connect->query($sql1);
        $data1 = $result1->fetch_assoc();

			$table .= '<tr>
				<td><center>'.$result['order_date'].'</center></td>
				<td><center>'.$data1['name'].'</center></td>
				<td><center>'.$data1['mob_no'].'</center></td>
				<td><center>'.$result['grand_total'].'</center></td>
			</tr>';	
			$totalAmount += $result['grand_total'];
		}
		$table .= '
		</tr>

		<tr>
			<td colspan="3"><center>Total Amount</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
	</table>
	';	
	echo $table;

}

?>
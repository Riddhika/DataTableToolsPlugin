
<?php 
	
	 class view_table {
		
		function view_table_data($tableName,$id){
			
					echo "<div class='row'>";
					echo "<div class='col-md-12'>";
					echo "<div class='panel panel-inverse'>";
	 					echo"
							 <div class='panel-heading'>
								<h4 class='panel-title'>$tableName</h4>
							</div>";
								echo "<div class='panel-body'>";
								echo "<table id='$id' class='table table-striped table-bordered'>";
											echo "<thead>";
												echo "<tr>";
													echo "<th width='1%'>#</th>";
													echo "<th width='10%'>Sold Date</th>";
													echo "<th width='10%'>Client Name</th>";
													echo "<th width='10%'>Client Coordinator</th>";
													echo "<th width='10%'>Expected Vaccinations</th>";
													echo "<th width='10%'>Action</th>";
												echo "</tr>";
											echo "</thead>";
											echo "<tbody>";
											$i=1;
											while($i<=20)
											{
											echo "<tr>";
													echo "<td>$i</td>";
													echo "<td>testData</td>";
													echo "<td>testData</td>";
													echo "<td>testData</td>";
													echo "<td>testData</td>";
													echo "<td>testData</td>";	
													echo "</tr>";
											$i=$i+1;		
											}
											echo "</tbody>";
										echo "</table>
										</div>
									</div>
								</div>
							</div>";
		}
	 }
?>


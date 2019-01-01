$(document).ready(function(){
			var drag=false;
			var filesNamesAndContent;
			var criteria=['Arze','Escalante','Safrygin','Sufaat'];
			var clusters=[];
			var elementInWorkArea=[];

			function elementSelected(i,name){
				for(let j=0;j<clusters[i].length;j++){
					if(clusters[i][j].name==name)	{
						let signal=elementInWorkArea[i][j];
						elementInWorkArea[i][j]=true;
						return signal;
					}
				}
			}

			function getContent(elementName){
				for(let i=0;i<filesNamesAndContent.length;i++){
					if(filesNamesAndContent[i].name==elementName)
						return filesNamesAndContent[i].content;
				}
			}

			function arrangeWorkArea(clusterName){
				for(var j=0;j<criteria.length;j++)	{
					if(criteria[j]==clusterName)
						break;
				}
				var start=0;
				var lis=$('.sortable').filter('[cluster="'+clusterName+'"]').find('li');
				var destlis=$('.sortable').filter('[clusters="'+clusterName+'"]').find('li');
				for(var i=0;i<clusters[j].length;i++){
					if(lis.eq(i+1).find('input').is(':checked')){
						destlis.eq(start).attr('cluster',lis.eq(i+1).find('input').val());
						destlis.eq(start++).text(getContent(lis.eq(i+1).find('input').val()));
					}
				}
			}

			function arrangePanel(clusterName){
				var start=0;
				var lis=$('.sortable').filter('[clusters="'+clusterName+'"]').find('li');
				var destlis=$('.sortable').filter('[cluster="'+clusterName+'"]').find('li');
				for(var i=1;i<destlis.length;i++){
					if(destlis.eq(i).find('input').is(':checked')){
						destlis.eq(i).find('input').val(lis.eq(start).attr('cluster'));
						destlis.eq(i).find('span').text(lis.eq(start++).attr('cluster'));
					}	
				}
			}

			/*--------------Get File and Content From Back End----------*/
			$.ajax('getFiles.php',{
				dataType:'json',
				success:function(data){
					    filesNamesAndContent=data;
					    
					    criteria[4]="unleft";
					    criteria[5]="unright";

					    data.forEach(function(d){
					    	d.selected=false;
					    })

						clusters[0]=data.filter(function(d){
								let s=new String(d['content']);
								if(s.indexOf(criteria[0])!==-1){
									d.selected=true;
								}
								return s.indexOf(criteria[0])!==-1;
							});
						elementInWorkArea[0]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[0]+'" ></ul>'));  
						let ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[0]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-1"+'</span></label></li>'));
						clusters[0].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);
							elementInWorkArea[0][index]=false;
						});						
						$('#left').append(ul);		
						
						
						clusters[1]=data.filter(function(d){
									let s=new String(d['content']);
									if(s.indexOf(criteria[1])!==-1){
										d.selected=true;
									}
									return s.indexOf(criteria[1])!==-1;
								});
						elementInWorkArea[1]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[1]+'" ></ul>'));  
						ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[1]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-2"+'</span></label></li>'));
						clusters[1].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);
							elementInWorkArea[1][index]=false;
						});						
						$('#left').append(ul);		


						clusters[2]=data.filter(function(d){
									let s=new String(d['content']);
									if(s.indexOf(criteria[2])!==-1){
										d.selected=true;
									}
									return s.indexOf(criteria[2])!==-1;
								});
						elementInWorkArea[2]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[2]+'" ></ul>'));  
						ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[2]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-3"+'</span></label></li>'));
						clusters[2].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);
							elementInWorkArea[2][index]=false;
						});						
						$('#right').append(ul);						


						clusters[3]=data.filter(function(d){
									let s=new String(d['content']);
									if(s.indexOf(criteria[3])!==-1){
										d.selected=true;
									}
									return s.indexOf(criteria[3])!==-1;
								});
						elementInWorkArea[3]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[3]+'" ></ul>'));  
						ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[3]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-4"+'</span></label></li>'));
						clusters[3].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);	
							elementInWorkArea[3][index]=false;
						});						
						$('#right').append(ul);


						/*-----------------For unclustered elements---------------------*/
						let leftHalf=[],rightHalf=[];
						for(var i=0,j=0;i<data.length/2;i++){
							if(data[i].selected==false && data[i].name!="." && data[i].name!=".." ){
								leftHalf[j++]=data[i];
							}
						}
						for( j=0;i<data.length ;i++){
							if(data[i].selected==false && data[i].name!="." && data[i].name!=".." ){
								rightHalf[j++]=data[i];
							}	
						}

						clusters[4]=leftHalf;
						clusters[5]=rightHalf;
						
						elementInWorkArea[4]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[4]+'" ></ul>'));  
						ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[4]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-5"+'</span></label></li>'));
						clusters[4].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);
							elementInWorkArea[4][index]=false;
						});						
						$('#left').append(ul);		
												

						elementInWorkArea[5]=[];
						$('.container').filter('.work').append($('<ul class="sortable" clusters="'+criteria[5]+'" ></ul>'));  
						ul=$('<ul id="myList" class="ml-ul sortable" cluster="'+criteria[5]+'""></ul>');
						ul.append($('<li class="ml-li list_list_item"><label><input type="checkbox" name="clusterCheckbox" value='+criteria+' ><span>'+"Cluster-6"+'</span></label></li>'));
						clusters[5].forEach(function(d,index){
							let li=$('<li class="ml-li list_list_item"><label><input type="checkbox" name="colorCheckbox" value='+d.name+' ><span>'+d.name+'</span></label></li>');
							ul.append(li);	
							elementInWorkArea[5][index]=false;
						});						
						$('#right').append(ul);

						/*For Sorting using Mouse*/
						$( function() {
						    $( ".sortable" ).sortable();
						    $( ".sortable" ).disableSelection();
					  	} );
						

						$(function(){
							$('.sortable').on('mouseenter',function(){
									drag=true;
							});
							$('.sortable').on('mouseleave',function(){
								if(drag==true){
									drag=false;
									if($(this).closest('.container').hasClass('work')){
										console.log('Work Area Dragged'+$(this).attr('clusters'));
										arrangePanel($(this).attr('clusters'));
									}
									else if($(this).closest('.container').hasClass('nput-container')){
										console.log('Panel Dragged'+$(this).attr('cluster'));
										arrangeWorkArea($(this).attr('cluster'));
									}
								}
							});
						});

						console.log(leftHalf,rightHalf);

				},
				error:function(){
					alert('404');
				}
			});//Ajax Closed here
			/*----------------------------------------------------------------*/
			

			/*----------Adding Content on clicking element of a cluster----------------*/
			$('.nput-container').on('click','.ml-ul li:nth-child(n+2) input',function(){	
				drag=false;
				if($(this).is(':checked')){				//on-selection
						$(this).parent().addClass('active');
						let clusterName=$(this).closest('.ml-ul').attr('cluster');
						for(var j=0;j<criteria.length;j++){
							if(criteria[j]==clusterName)
								break;
						}

						for(var i=0;i<clusters[j].length;i++){
							if(clusters[j][i].name==$(this).val()){
								elementInWorkArea[j][i]=true;
								break;
							}
						}
						let li=$('<li cluster="'+clusters[j][i].name+'">'+clusters[j][i].content+'</li>');
						$('.sortable').filter('[clusters="'+clusterName+'"]').append(li);
				}
				else{								  //de-selection
					$(this).parent().removeClass('active');
					let clusterName=$(this).closest('.ml-ul').attr('cluster');
						for(var j=0;j<criteria.length;j++){
							if(criteria[j]==clusterName)
								break;
						}
						let lis=$('.sortable').filter('[clusters="'+clusterName+'"]').find('li');
						for(let i=0;i<lis.length;i++){
							if(lis.eq(i).attr('cluster')==$(this).val()){
								lis.eq(i).remove();
							}
						}
						for(let i=0;i<clusters[j].length;i++){
							if(clusters[j][i].name==$(this).val()){
								elementInWorkArea[j][i]=false;
							}
						}
				}
				console.log(elementInWorkArea);
			});
			/*----------Adding Content on clicking element of a cluster---Ends Here-------------*/


			/*----------Adding Content on clicking name of a cluster----------------*/
			$('.nput-container').on('click','.ml-ul li:first-child input',function(){	
				drag=false;
				if($(this).is(':checked')){				//on-selection
						$(this).parent().addClass('active');
						let clusterName=$(this).closest('.ml-ul').attr('cluster');
						for(var j=0;j<criteria.length;j++){
							if(criteria[j]==clusterName)
								break;
						}

						let lis=$('.sortable').filter('[cluster="'+clusterName+'"]').find('li');
						$(this).closest('.ml-ul').find('input').prop('checked',true);
						$('.sortable').filter('[cluster="'+clusterName+'"]').find('input').attr('checked',true);
						for(let i=0;i<clusters[j].length;i++){
							if(lis.eq(i+1).find('input').is(':checked')&&elementSelected(j,lis.eq(i+1).find('input').val())==false){
								lis.eq(i+1).find('input').parent().addClass('active');
								let val=lis.eq(i+1).find('input').val();
								let li=$('<li cluster="'+clusters[j][i].name+'">'+clusters[j][i].content+'</li>');
								$('.sortable').filter('[clusters="'+clusterName+'"]').append(li);
							}
						}
				}
				else{								  //de-selection

					$(this).parent().removeClass('active');
					let clusterName=$(this).closest('.ml-ul').attr('cluster');
						for(var j=0;j<criteria.length;j++){
							if(criteria[j]==clusterName)
								break;
						}
						$(this).closest('.ml-ul').find('.active').removeClass('active');
						$(this).closest('.ml-ul').find('input').prop('checked',false);
						let lis=$('.sortable').filter('[clusters="'+clusterName+'"]').find('li');
						for(let i=0;i<lis.length;i++){
							//if(lis.eq(i).attr('cluster')==$(this).val()){
								lis.eq(i).remove();
							//}
						}
						for(let i=0;i<clusters[j].length;i++){
								elementInWorkArea[j][i]=false;
						}
				}
				console.log(elementInWorkArea);
			});
			/*----------Adding Content on clicking name of a cluster---Ends Here-------------*/

		});//document.ready closed here
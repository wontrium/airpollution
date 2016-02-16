<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Google Map API 3 - 01</title>
<style type="text/css">
html { height: 100% }
body { 
	height:100%;
	margin:0;padding:0;
	font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
	font-size:12px;
}
/* css ��˹��������ҧ �����٧�ͧἹ��� */
#map_canvas { 
	width:550px;
	height:400px;
	margin:auto;
/*	margin-top:100px;*/
}
</style>


</head>

<body>
  <div id="map_canvas"></div>
 <div id="showDD" style="margin:auto;padding-top:5px;width:550px;">  
  <form id="form_get_detailMap" name="form_get_detailMap" method="post" action="">  
    Latitude  
    <input name="lat_value" type="text" id="lat_value" value="0" />  <br />
    Longitude  
    <input name="lon_value" type="text" id="lon_value" value="0" />  <br />
  Zoom  
  <input name="zoom_value" type="text" id="zoom_value" value="0" size="5" />  
  <br />
  <input type="submit" name="button" id="button" value="�ѹ�֡" />  
  </form>  
</div> 
  
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
var map; // ��˹������ map ����ҹ�͡�ѧ��ѹ �����������ö���¡��ҹ �ҡ��ǹ�����
var GGM; // ��˹������ GGM ����� google.maps Object �������¡��ҹ����¢��
function initialize() { // �ѧ��ѹ�ʴ�Ἱ���
	GGM=new Object(google.maps); // �纵���� google.maps Object ���㹵���� GGM
	// ��˹��ش������鹢ͧἹ���
	var my_Latlng  = new GGM.LatLng(13.761728449950002,100.6527900695800);
	var my_mapTypeId=GGM.MapTypeId.ROADMAP; // ��˹��ٻẺἹ������ʴ�
	// ��˹� DOM object �������Ἱ�����ʴ� ������� div id=map_canvas
	var my_DivObj=$("#map_canvas")[0]; 
	// ��˹� Option �ͧἹ���
	var myOptions = {
		zoom: 13, // ��˹���Ҵ��� zoom
		center: my_Latlng , // ��˹��ش��觡�ҧ
		mapTypeId:my_mapTypeId // ��˹��ٻẺἹ���
	};
	map = new GGM.Map(my_DivObj,myOptions);// ���ҧἹ�������纵�������㹪��� map
	
	var my_Marker = new GGM.Marker({ // ���ҧ��� marker
		position: my_Latlng,  // ��˹���������ǡѺ�ش��觡�ҧ
		map: map, // ��˹���� marker �����ѺἹ������ instance ��� map
		draggable:true, // ��˹��������ö�ҡ��� marker �����
		title:"��ԡ�ҡ�����ҵ��˹觨ش����ͧ���!" // �ʴ� title ��������������������˹��
	});
	
	// ��˹� event ���Ѻ��� marker ���������ش����ҡ��� marker ���ӧҹ����
	GGM.event.addListener(my_Marker, 'dragend', function() {
		var my_Point = my_Marker.getPosition();  // �ҵ��˹觢ͧ��� marker ����͡��ҡ���ǻ����
        map.panTo(my_Point);  // ���Ἱ����ʴ�价���� marker		
        $("#lat_value").val(my_Point.lat());  // ��Ҥ�� latitude ��� marker �ʴ�� textbox id=lat_value
        $("#lon_value").val(my_Point.lng()); // ��Ҥ�� longitude ��� marker �ʴ�� textbox id=lon_value 
        $("#zoom_value").val(map.getZoom()); // ��Ң�Ҵ zoom �ͧἹ����ʴ�� textbox id=zoom_value
	});		

	// ��˹� event ���Ѻ���Ἱ��� ������ա������¹�ŧ��� zoom
	GGM.event.addListener(map, 'zoom_changed', function() {
		$("#zoom_value").val(map.getZoom()); // ��Ң�Ҵ zoom �ͧἹ����ʴ�� textbox id=zoom_value 	
	});

}
$(function(){
	// ��Ŵ ʤ�Ի google map api ����������Ŵ���º��������
	// ��ҵ���� ���������� google map api
	// v=3.2&sensor=false&language=th&callback=initialize
	//	v �����ѹ� 3.2
	//	sensor ��˹��������ö�ʴ����˹觷��ԴἹ��������� ���������Ѻ��Ͷ�� ������ false
	//	language ���� th ,en �繵�
	//	callback ������¡��ѧ��ѹ�ʴ� Ἱ��� initialize
	$("<script/>", {
	  "type": "text/javascript",
	  src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
	}).appendTo("body");	
});
</script>  
</body>
</html>
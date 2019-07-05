var randoms = Math.floor(Math.random() * 100);
var dataPoints = [];
var dataprofile = [];

$.getJSON("getdatatojson.php?ran="+randoms, addData);
$.getJSON("getdatatojsons.php?id=1&ran="+randoms, addDataprofile);
//$.getJSON("getdatatojson.php?ran="+randoms, addData);
var sessid = sessionStorage.getItem("sessid");

function isObject (value) {
	return value && typeof value === 'object' && value.constructor === Object;
}
function isArray (value) {
	return value && typeof value === 'object' && value.constructor === Array;
}

function addData(data) {
		var dps = data;

		for (var i = 0; i < dps.length; i++) {
			var vals1 = dps[i][0];
			var vals2 = dps[i][1];
			var vals3 = dps[i][2];
			var vals4 = dps[i][3];
			var vals5 = dps[i][4];
			var vals6 = dps[i][5];

			if(vals2==null){
				dataPoints.push({
					id:   vals1,
					pid: vals3,
					name:  vals4,
					title: vals5,
					img:  vals6
				});
			}else{
				dataPoints.push({
					id:   vals1,
					tags: vals2,
					pid: vals3,
					name:  vals4,
					title: vals5,
					img:  vals6
				});
			}
		}
		//chart.render();
}
function addDataprofile(data){
	var dps = data;
	for (var key in dps) {
		dataprofile.push(dps[key]);
	//	console.log("key " + key + " has value " + dps[key]);		
	}
	//console.log(dataprofile);
}
function dashboard1() {
	
//start webcall
	var webcallMeIcon = '<svg width="24" height="24" viewBox="0 0 300 400"><g transform="matrix(1,0,0,1,40,40)"><path fill="#5DB1FF" d="M260.423,0H77.431c-5.522,0-10,4.477-10,10v317.854c0,5.522,4.478,10,10,10h182.992c5.522,0,10-4.478,10-10V10 C270.423,4.477,265.945,0,260.423,0z M178.927,302.594c0,5.522-4.478,10-10,10c-5.523,0-10-4.478-10-10v-3.364h20V302.594z M250.423,279.229H87.431V58.624h162.992V279.229z" /><path fill="#5DB1FF" d="M118.5,229.156c4.042,4.044,9.415,6.271,15.132,6.271c5.715,0,11.089-2.227,15.133-6.269l29.664-29.662 c4.09-4.093,6.162-9.442,6.24-14.816c5.601-0.078,10.857-2.283,14.829-6.253l29.66-29.662c4.042-4.043,6.269-9.417,6.269-15.133 c0-5.716-2.227-11.09-6.269-15.13l-9.806-9.806c-4.041-4.043-9.415-6.27-15.132-6.27c-5.716,0-11.09,2.227-15.132,6.269 l-29.663,29.662c-4.092,4.092-6.164,9.443-6.242,14.817c-5.601,0.078-10.857,2.283-14.828,6.252l-29.661,29.662 c-4.042,4.043-6.269,9.418-6.268,15.136c0,5.716,2.227,11.089,6.269,15.129L118.5,229.156z M168.618,147.548l29.662-29.661 c1.587-1.587,3.696-2.461,5.94-2.461c2.243,0,4.353,0.874,5.938,2.461l9.808,9.808c1.586,1.586,2.46,3.694,2.46,5.937 c0,2.244-0.874,4.354-2.462,5.941l-29.658,29.661c-1.588,1.587-3.697,2.46-5.941,2.46c-2.243,0-4.353-0.874-5.938-2.46 l-0.309-0.309l19.598-19.598c2.539-2.539,2.539-6.654,0-9.192c-2.537-2.538-6.654-2.538-9.191,0l-19.599,19.598l-0.308-0.308 C165.344,156.152,165.345,150.823,168.618,147.548z M117.888,198.28l29.66-29.661c1.587-1.586,3.695-2.46,5.939-2.46 c2.242,0,4.349,0.872,5.934,2.455c0.002,0.001,0.004,0.003,0.005,0.005l0.309,0.309l-19.598,19.598 c-2.539,2.538-2.539,6.653,0,9.191c1.269,1.27,2.933,1.904,4.596,1.904s3.327-0.635,4.596-1.904l19.599-19.598l0.309,0.309 c3.273,3.273,3.273,8.603,0,11.877l-29.662,29.66c-1.588,1.588-3.698,2.462-5.941,2.462c-2.243,0-4.352-0.874-5.938-2.462 l-9.807-9.806c-1.586-1.586-2.46-3.694-2.46-5.938C115.426,201.978,116.3,199.868,117.888,198.28z" /></g></svg>';

	var icon1 = '<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M8.627,7.885C8.499,8.388,7.873,8.101,8.13,8.177L4.12,7.143c-0.218-0.057-0.351-0.28-0.293-0.498c0.057-0.218,0.279-0.351,0.497-0.294l4.011,1.037C8.552,7.444,8.685,7.667,8.627,7.885 M8.334,10.123L4.323,9.086C4.105,9.031,3.883,9.162,3.826,9.38C3.769,9.598,3.901,9.82,4.12,9.877l4.01,1.037c-0.262-0.062,0.373,0.192,0.497-0.294C8.685,10.401,8.552,10.18,8.334,10.123 M7.131,12.507L4.323,11.78c-0.218-0.057-0.44,0.076-0.497,0.295c-0.057,0.218,0.075,0.439,0.293,0.495l2.809,0.726c-0.265-0.062,0.37,0.193,0.495-0.293C7.48,12.784,7.35,12.562,7.131,12.507M18.159,3.677v10.701c0,0.186-0.126,0.348-0.306,0.393l-7.755,1.948c-0.07,0.016-0.134,0.016-0.204,0l-7.748-1.948c-0.179-0.045-0.306-0.207-0.306-0.393V3.677c0-0.267,0.249-0.461,0.509-0.396l7.646,1.921l7.654-1.921C17.91,3.216,18.159,3.41,18.159,3.677 M9.589,5.939L2.656,4.203v9.857l6.933,1.737V5.939z M17.344,4.203l-6.939,1.736v9.859l6.939-1.737V4.203z M16.168,6.645c-0.058-0.218-0.279-0.351-0.498-0.294l-4.011,1.037c-0.218,0.057-0.351,0.28-0.293,0.498c0.128,0.503,0.755,0.216,0.498,0.292l4.009-1.034C16.092,7.085,16.225,6.863,16.168,6.645 M16.168,9.38c-0.058-0.218-0.279-0.349-0.498-0.294l-4.011,1.036c-0.218,0.057-0.351,0.279-0.293,0.498c0.124,0.486,0.759,0.232,0.498,0.294l4.009-1.037C16.092,9.82,16.225,9.598,16.168,9.38 M14.963,12.385c-0.055-0.219-0.276-0.35-0.495-0.294l-2.809,0.726c-0.218,0.056-0.351,0.279-0.293,0.496c0.127,0.506,0.755,0.218,0.498,0.293l2.807-0.723C14.89,12.825,15.021,12.603,14.963,12.385"></path></svg>';
	
	var uploadpic ='<svg class="svg-icon"  width="24" height="24" viewBox="0 0 20 20"><path d="M10,6.536c-2.263,0-4.099,1.836-4.099,4.098S7.737,14.732,10,14.732s4.099-1.836,4.099-4.098S12.263,6.536,10,6.536M10,13.871c-1.784,0-3.235-1.453-3.235-3.237S8.216,7.399,10,7.399c1.784,0,3.235,1.452,3.235,3.235S11.784,13.871,10,13.871M17.118,5.672l-3.237,0.014L12.52,3.697c-0.082-0.105-0.209-0.168-0.343-0.168H7.824c-0.134,0-0.261,0.062-0.343,0.168L6.12,5.686H2.882c-0.951,0-1.726,0.748-1.726,1.699v7.362c0,0.951,0.774,1.725,1.726,1.725h14.236c0.951,0,1.726-0.773,1.726-1.725V7.195C18.844,6.244,18.069,5.672,17.118,5.672 M17.98,14.746c0,0.477-0.386,0.861-0.862,0.861H2.882c-0.477,0-0.863-0.385-0.863-0.861V7.384c0-0.477,0.386-0.85,0.863-0.85l3.451,0.014c0.134,0,0.261-0.062,0.343-0.168l1.361-1.989h3.926l1.361,1.989c0.082,0.105,0.209,0.168,0.343,0.168l3.451-0.014c0.477,0,0.862,0.184,0.862,0.661V14.746z"></path></svg>';
	
	var changpwdss2 ='<svg class="svg-icon"  width="24" height="24"  viewBox="0 0 20 20"><path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path></svg>';
	
	var editprofile ='<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path></svg>';
	
	var profile ='<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path fill="none" d="M17.222,5.041l-4.443-4.414c-0.152-0.151-0.356-0.235-0.571-0.235h-8.86c-0.444,0-0.807,0.361-0.807,0.808v17.602c0,0.448,0.363,0.808,0.807,0.808h13.303c0.448,0,0.808-0.36,0.808-0.808V5.615C17.459,5.399,17.373,5.192,17.222,5.041zM15.843,17.993H4.157V2.007h7.72l3.966,3.942V17.993z"></path><path fill="none" d="M5.112,7.3c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808c0-0.447-0.363-0.808-0.808-0.808H5.92C5.475,6.492,5.112,6.853,5.112,7.3z"></path><path fill="none" d="M5.92,5.331h4.342c0.445,0,0.808-0.361,0.808-0.808c0-0.446-0.363-0.808-0.808-0.808H5.92c-0.444,0-0.808,0.361-0.808,0.808C5.112,4.97,5.475,5.331,5.92,5.331z"></path><path fill="none" d="M13.997,9.218H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,9.58,14.442,9.218,13.997,9.218z"></path><path fill="none" d="M13.997,11.944H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,12.306,14.442,11.944,13.997,11.944z"></path><path fill="none" d="M13.997,14.67H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.447,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,15.032,14.442,14.67,13.997,14.67z"></path></svg>';
	
	
	
	var getmarrys2 ='<svg width="24" height="24" class="svg-icon" viewBox="0 0 20 20"><path d="M9.719,17.073l-6.562-6.51c-0.27-0.268-0.504-0.567-0.696-0.888C1.385,7.89,1.67,5.613,3.155,4.14c0.864-0.856,2.012-1.329,3.233-1.329c1.924,0,3.115,1.12,3.612,1.752c0.499-0.634,1.689-1.752,3.612-1.752c1.221,0,2.369,0.472,3.233,1.329c1.484,1.473,1.771,3.75,0.693,5.537c-0.19,0.32-0.425,0.618-0.695,0.887l-6.562,6.51C10.125,17.229,9.875,17.229,9.719,17.073 M6.388,3.61C5.379,3.61,4.431,4,3.717,4.707C2.495,5.92,2.259,7.794,3.145,9.265c0.158,0.265,0.351,0.51,0.574,0.731L10,16.228l6.281-6.232c0.224-0.221,0.416-0.466,0.573-0.729c0.887-1.472,0.651-3.346-0.571-4.56C15.57,4,14.621,3.61,13.612,3.61c-1.43,0-2.639,0.786-3.268,1.863c-0.154,0.264-0.536,0.264-0.69,0C9.029,4.397,7.82,3.61,6.388,3.61"></path></svg>';
	
	var childden = '<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path></svg>';
	
	var deletes = '<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path fill="none" d="M16.588,3.411h-4.466c0.042-0.116,0.074-0.236,0.074-0.366c0-0.606-0.492-1.098-1.099-1.098H8.901c-0.607,0-1.098,0.492-1.098,1.098c0,0.13,0.033,0.25,0.074,0.366H3.41c-0.606,0-1.098,0.492-1.098,1.098c0,0.607,0.492,1.098,1.098,1.098h0.366V16.59c0,0.808,0.655,1.464,1.464,1.464h9.517c0.809,0,1.466-0.656,1.466-1.464V5.607h0.364c0.607,0,1.1-0.491,1.1-1.098C17.688,3.903,17.195,3.411,16.588,3.411z M8.901,2.679h2.196c0.202,0,0.366,0.164,0.366,0.366S11.3,3.411,11.098,3.411H8.901c-0.203,0-0.366-0.164-0.366-0.366S8.699,2.679,8.901,2.679z M15.491,16.59c0,0.405-0.329,0.731-0.733,0.731H5.241c-0.404,0-0.732-0.326-0.732-0.731V5.607h10.983V16.59z M16.588,4.875H3.41c-0.203,0-0.366-0.164-0.366-0.366S3.208,4.143,3.41,4.143h13.178c0.202,0,0.367,0.164,0.367,0.366S16.79,4.875,16.588,4.875zM6.705,14.027h6.589c0.202,0,0.366-0.164,0.366-0.366s-0.164-0.367-0.366-0.367H6.705c-0.203,0-0.366,0.165-0.366,0.367S6.502,14.027,6.705,14.027z M6.705,11.83h6.589c0.202,0,0.366-0.164,0.366-0.365c0-0.203-0.164-0.367-0.366-0.367H6.705c-0.203,0-0.366,0.164-0.366,0.367C6.339,11.666,6.502,11.83,6.705,11.83z M6.705,9.634h6.589c0.202,0,0.366-0.164,0.366-0.366c0-0.202-0.164-0.366-0.366-0.366H6.705c-0.203,0-0.366,0.164-0.366,0.366C6.339,9.47,6.502,9.634,6.705,9.634z"></path></svg>';
	
	var upvideo = '<svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M18.175,4.142H1.951C1.703,4.142,1.5,4.344,1.5,4.592v10.816c0,0.247,0.203,0.45,0.451,0.45h16.224c0.247,0,0.45-0.203,0.45-0.45V4.592C18.625,4.344,18.422,4.142,18.175,4.142 M4.655,14.957H2.401v-1.803h2.253V14.957zM4.655,12.254H2.401v-1.803h2.253V12.254z M4.655,9.549H2.401V7.747h2.253V9.549z M4.655,6.846H2.401V5.043h2.253V6.846zM14.569,14.957H5.556V5.043h9.013V14.957z M17.724,14.957h-2.253v-1.803h2.253V14.957z M17.724,12.254h-2.253v-1.803h2.253V12.254zM17.724,9.549h-2.253V7.747h2.253V9.549z M17.724,6.846h-2.253V5.043h2.253V6.846z"></path></svg>';
	//end webcall
	
	
    var familyGroupTag = {
        group: true,
        template: "group_grey",
        groupState: OrgChart.EXPAND
    };


    var chart = new OrgChart(document.getElementById("tree"), {
		collapse: {
                level: 3
            },
		
        template: "diva",
        enableDragDrop: false,
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        },
        tags: {
            f1: familyGroupTag,
            f2: familyGroupTag,
            f3: familyGroupTag,
            f4: familyGroupTag,
            f5: familyGroupTag,
			f6: familyGroupTag,
            f7: familyGroupTag,
            f8: familyGroupTag,
            f9: familyGroupTag,
            f10: familyGroupTag
        },
		nodeMenu:{
			    uppics: {
                    text: "อัพโหลดรูปถ่าย",
                    icon: uploadpic,
                    onClick: uploadpicss
                },
				editprofiles: {
                    text: "แก้ไขข้อมูลส่วนตัว",
                    icon: editprofile,
                    onClick: profiless
                },
				changepwd: {
                    text: "แก้ไขรหัสผ่าน",
                    icon: changpwdss2,
                    onClick: changpasswdss
                },
				details: { text: "รายละเอียด",
						   onClick: details
						 },
            	//edit: {text:"<h5 onclick = alert('ok');>Edit</h5>"},
            	//add: {text:"Add"},
            	
				getmarry: {
                    text: "แต่งงาน",
                    icon: getmarrys2,
                    onClick: marrys
                },
				havechild: {
                    text: "เพิ่มบุตร",
                    icon: childden,
                    onClick: babys
                },
				/*sendrequest: {
                    text: "เชื่อมต่อครอบครัว",
                    icon: webcallMeIcon,
                    onClick: changpasswdss
                },*/
				sendrequest: {
                    text: "อัพโหลดวิดีโอ",
                    icon: upvideo,
                    onClick: uploadvideo
                },
				remove: {
					text:"ลบ",
					onClick: delpoint
						}
            },
     
		nodes: dataPoints
    });
	
		
	//function
function uploadvideo(nodeId) {
            var nodeData = chart.get(nodeId);
            var employeeName = nodeData["name"];
			$("#myModalvideo").modal(); 
			$(".modal-title").html("อัพโหลดวิดีโอของ : "+employeeName);
			$("#hiddeidvideo").val(nodeData["id"]);
		    $("#imgvd").css("display","none");
			/*$('#myModalvideo').on('hidden.bs.modal', function (e) {
						//console.log(dataPoints);
						sessionStorage.setItem("reloading", "true");
						sessionStorage.setItem("urlreload",'orgchart.php');
						document.location.reload();
			});*/
			 //console.log(nodeData["id"]);
        }
function uploadpicss(nodeId){
			var nodeData = chart.get(nodeId);
            var employeeName = nodeData["name"];
			$("#myModal1").modal(); 
			$(".modal-title").html("อัพโหลดรูปภาพของ : "+employeeName);
			$("#hiddeid").val(nodeData["id"]);
			$('#myModal1').on('hidden.bs.modal', function (e) {
						//console.log(dataPoints);
						sessionStorage.setItem("reloading", "true");
						sessionStorage.setItem("urlreload",'orgchart.php');
						document.location.reload();
			});
		}
function changpasswdss(nodeId){
			var nodeData = chart.get(nodeId);
            var employeeName = nodeData["name"];
			$("#myModal3").modal(); 
			$(".modal-title").html("เปลี่ยนรหัสผ่านของ : "+employeeName);
			$("#hiddeid").val(nodeData["id"]);
			
		}
function marrys(nodeId){
			var nodeData = chart.get(nodeId);
			var employeeName = nodeData["name"];
			$("#myModal5").modal();
			$(".modal-title").html("เพิ่มข้อมูลภรรยาของ : "+employeeName);
			$("#hiddenwife").val(nodeData["id"]);
			$('#myModal1').on('hidden.bs.modal', function (e) {
						//console.log(dataPoints);
						sessionStorage.setItem("reloading", "true");
						sessionStorage.setItem("urlreload",'orgchart.php');
						document.location.reload();
			});
	}
function babys(nodeId){
			var nodeData = chart.get(nodeId);
			var employeeName = nodeData["name"];
			$("#myModal6").modal(); 
			$(".modal-title").html("เพิ่มข้อมูลบุตรของ : "+employeeName);
			$("#hiddenbaby").val(nodeData["id"]);
	}
	//end function

}

function profiless(nodeId){
	if(isNaN(sessid) || !sessid){
			showdialog("คุณยังไม่ได้เข้าสู่ระบบ");
			$('#dialog').modal('show');
			$('#dialog').on('hidden.bs.modal', function (e) {
				$("#myModallogin").modal();
			
			//console.log("not ok");
			return false;
			});
				
		}else{
			$("#myModal2").modal();
				$.ajax({
				url: "getdatatojsons.php?id="+nodeId,
				type: "POST",
				beforeSend: function(){
					showanimation(1);
				},	
				success: function(result)
					{
						showanimation(2);
						var myObj = JSON.parse(result);
						$("#imgs").attr("src",myObj[22].img);
						$(".modal-title").html("แก้ไขข้อมูลส่วนตัว : "+myObj[2].THFirstName);
						
						//console.log(myObj);
						$("#hidenid").val(myObj[0].ID);
						$("#thfirstname").val(myObj[2].THFirstName);
						$("#thlastname").val(myObj[3].THLastName);
						
						$("#tholdlastname").val(myObj[4].THOldLastName);
						$("#enfirstname").val(myObj[5].ENFirstName);
						
						$("#enlastname").val(myObj[6].ENLastName);
						$("#nicname").val(myObj[7].NicName);
						
						$("#idfather").val(myObj[8].IDfather);
						$("#idmother").val(myObj[9].IDmother);
						
						$("#idhusband").val(myObj[10].IDhusBand);
						$("#tags").val(myObj[11].tags);
						
						$("#sex").val(myObj[12].Sex);
						$("#birthday").val(myObj[13].Birthday);
						
						$("#placeofbirth").val(myObj[14].PlaceOfBirth);
						$("#nationality").val(myObj[15].Nationality);
						
						$("#address").val(myObj[16].Address);
						$("#province").val(myObj[17].Province);
						
						$("#country").val(myObj[18].Country);
						$("#telephone").val(myObj[19].Telephone);
						
						$("#email").val(myObj[20].Email);
						$("#lineid").val(myObj[21].LineID);
						
					//	$("#tholdlastname").val(myObj[21].img);
						$("#otherid1").val(myObj[23].OtherID1);
						
						$("#ortherid2").val(myObj[24].OrtherID2);
						$("#deathday").val(myObj[25].Deathday);
						
						$("#introduce").text(myObj[26].Introduce);
						$("#numsgen").val(myObj[27].NumsGEN);
					}
				});	
		}
}
function delpoint(nodeId){
			//var nodeData = chart.get(nodeId);
			var datas = "id="+nodeId;
			$.ajax({
			url: "administrator/process.php?typeprocess=delpoint",
			type: "POST",
			data: datas,
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				showanimation(2);
				showdialog("ลบข้อมูลเรียบร้อย");
				$('#dialog').modal('show');
				$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
				});
				$('#dialog').on('hidden.bs.modal', function () {
						sessionStorage.setItem("reloading", "true");
						sessionStorage.setItem("urlreload",'orgchart.php');
						document.location.reload();
				});	
				
						
			}
});
}
function details(nodeId){
			//console.log(nodeId);
			$("#myModal4").modal();
			$.ajax({
				url: "getdatatojsons.php?id="+nodeId,
				type: "POST",
				beforeSend: function(){
					showanimation(1);
				},
				success: function(result)
					{
					showanimation(2);	
						var myObj = JSON.parse(result);
						//console.log(myObj);
						//$("#hidenid").val(myObj[0].ID);
						$(".modal-title").html("ข้อมูลส่วนตัว : "+myObj[2].THFirstName);
						$("#idss").html("รหัส : "+myObj[0].ID);
						$("#thfullname").html("ชื่อสกุล : "+myObj[2].THFirstName +" "+ myObj[3].THLastName);
						
						$("#tholdlastnames").html("นามสกุลเดิม : "+myObj[4].THOldLastName);
						
						$("#enfullname").html("ชื่อสกุลอังกฤษ : "+myObj[5].ENFirstName +" "+myObj[6].ENLastName);
						
						//$("#nicname").html(myObj[6].NicName);
						$("#nicnamep").html("ชื่อเล่น : "+myObj[7].NicName);
						
						$("#idfatherp").html("รหัสบิดา : "+myObj[8].IDfather);
						$("#idmotherp").html("รหัสมารดา : "+myObj[9].IDmother);
						
						$("#idhusbandp").html("รหัสสามี : "+myObj[10].IDhusBand);
						$("#tagsp").html("กลุ่ม : "+myObj[11].tags);
						
						$("#sexp").html("เพศ : "+myObj[12].Sex);
						$("#birthdayp").html("วันเดือนปีเกิด : "+myObj[13].Birthday);
						
						$("#placeofbirthp").html("สถานที่เกิด : "+myObj[14].PlaceOfBirth);
						$("#nationalityp").html("สัญชาติ : "+myObj[15].Nationality);
						
						$("#addressp").html("ที่อยู่ : "+myObj[16].Address);
						$("#provincep").html("จังหวัด : "+myObj[17].Province);
						
						$("#countryp").html("ประเทศ : "+myObj[18].Country);
						$("#telephonep").html("เบอร์โทร : "+myObj[19].Telephone);
						
						$("#emailp").html("อีเมล : "+myObj[20].Email);
						$("#lineidp").html("ไลน์ไอดี : "+myObj[21].LineID);
						
						//$("#tholdlastname").val(myObj[21].img);
						$("#imgsp").attr("src",myObj[22].img);
						$("#imgsp").attr("class","img-thumbnail");
						$("#imgsp2").attr("src",myObj[22].img);
						$("#imgsp2").attr("class","img-thumbnail");
						
						$("#otherid1p").html("ไอดีอื่นๆ : "+myObj[23].OtherID1);
						
						$("#ortherid2p").html("ไอดีอื่นๆ : "+myObj[24].OrtherID2);
						$("#deathdayp").html("วันที่เสียชีวิต : "+myObj[25].Deathday);
						
						$("#introducep").html("แนะนำตัว : "+myObj[26].Introduce);
						$("#numsgenp").html("รุ่น : "+myObj[27].NumsGEN);
					}
				});
		}
function changpage(target,Url,txt){
	var textshow = jQuery(txt).text();
	//console.log(textshow);
	$.ajax({
			url: Url,
			type: "POST",
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				showanimation(2);
				$("#content").html(result);
				$("h2").text(textshow);				
				$(".hero-area").css("display","none");
				$(".call-to-action-area").css("display","none");
				$(".top-features-area").css("display","none");
				$(".breadcumb-area").css("display","block");
				//$(".breadcumb-area").css("display","none");
			}
		});
}
function changpage2(target,Url,txt){
//	var textshow = jQuery(txt).text();
//console.log("form changpage2");
	$.ajax({
			url: Url,
			type: "POST",
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{	showanimation(2);
				$("#content").html(result);
				$("h2").text(txt);
				$(".hero-area").css("display","none");
				$(".call-to-action-area").css("display","none");
				$(".top-features-area").css("display","none");
				$(".breadcumb-area").css("display","block");
				//$(".breadcumb-area").css("display","none");
			}
		});
}

function chartorg(txt){
					$(".hero-area").css("display","none");
					$(".call-to-action-area").css("display","none");
					$(".top-features-area").css("display","none");
					$(".breadcumb-area").css("display","block");
	
    var chart = new OrgChart(document.getElementById("tree"), {
        template: "derek",
        enableDragDrop: true,
        toolbar: true,
        menu: {
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" },
            csv: { text: "Export CSV" }
        },
        nodeMenu: {
            details: { text: "Details" },
            add: { text: "Add New" },
            edit: { text: "Edit" },
            remove: { text: "Remove" },
        },
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img",
            field_number_children: "field_number_children"
        },
        
		nodes: dataPoints2
    });
	
	
}
function showdialog(rx){
	var txt ='<div class="modal fade" id="dialog" role="dialog">';
    	txt +='<div class="modal-dialog"><div class="modal-content">';
        txt +='<div class="modal-header"><h4 class="modal-title">ข้อความแสดงการทำงาน</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div>';
        txt +='<div class="modal-body"><h3>'+ rx +'</h3></div>';
        txt +='<div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button></div>';
      	txt +='</div></div></div>';
		$("#showcontentmodal").html(txt);
		//location.reload();
}
function showreport(type){
	var Url;
	var textshow;
	switch(type){
		case 1:
			Url = "administrator/showreport.php?type="+type;
			textshow = "รายงานทั้งหมด";
		break;
		case 2:
			Url = "administrator/showreport.php?type="+type;
			textshow = "รายงานจัดกลุ่มตามนามสกุล";
		break;
		case 3:
			Url = "administrator/showreportsex.php";
			textshow = "รายงานจัดกลุ่มตามเพศ";
		break;
		case 4:
			Url = "administrator/showreport.php?type="+type;
			textshow = "รายงานจัดกลุ่มตามจังหวัด";
		break;
		case 5:
			Url = "administrator/showreport.php?type="+type;
			textshow = "รายงานจัดกลุ่มตามรุ่น";
		break;	
		default:
			
	}
		$.ajax({
			url: Url,
			type: "POST",
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				showanimation(2);
				$("#content").html(result);
				$("h2").text(textshow);		
				
				$(".hero-area").css("display","none");
				$(".call-to-action-area").css("display","none");
				$(".top-features-area").css("display","none");
				$(".breadcumb-area").css("display","block");
				//$(".breadcumb-area").css("display","none");
			}
		});
	
}
function openpages(urllink){
	window.open(urllink);
}
function registerform(){
	$("#myModallogin").modal('hide');
	$("#myModalregister").modal('show');
	//console.log('click');
}
function showanimation(ID){
	switch(ID){
		case 1 :
			document.getElementById('se-pre-con').style.display = 'block';
		break;
		case 2 :
			document.getElementById('se-pre-con').style.display = 'none';			
		break;
	}
}



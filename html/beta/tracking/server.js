request = require("request");
server=require('http').createServer(),
io=require('socket.io').listen(server),
names=[];
timer=[];
url="http://api.zapplon.com:8080/v1/rest/booking/tracking";
server.listen(8000,function()
{
    console.log('server listening on 8000');
});
io.on('connection',function(socket)
{
    socket.on("shareurl",function(data)
    {
        var roomname="room"+data;
        socket.roomname=roomname;
        socket.bid=data;
        socket.join(roomname);
        if(roomname in names)
        {
           
            names[roomname].push(socket.id);
            console.log(names[roomname]);
        }
        else
        {
            names[roomname]=[socket.id];
            timer[roomname]= 0;
        }

        console.log("sending first request");
        request(
        {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            url: url,
form: {client_id:"zapp_web_client",app_type:"zapp_web",ref_id:data}, //URL to hit
method: 'POST'
}, function(error, response, body)
{
    if(error)
    {
        console.log(error);
    }
    else
    {
        resp=JSON.parse(body);
        console.log(resp);
        if(resp.response!="invalid bookingId")
        {


            
            socket.emit("initial",resp);

                    //var a="room"+data;
                    if(timer[roomname]==0)
                    {
                        
                        var temp=new Date().getTime();
                        timer[roomname]=temp;
                        intervalid=setInterval(function()
                        {
                            myTimer(roomname,temp);
                        },15000);

                        function myTimer(arg1,arg2)
                        {
                            console.log(' every 10 second...');
                            var latlng=0;
                            if(timer[arg1]==arg2)
                            {
                                request(
                                {
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded'
                                    },
                                    url: url,
                                    form: {client_id:"zapp_web_client",app_type:"zapp_web",ref_id:data},
                                    method: 'POST'
                                }, function(error, response, body)
                                {
                                    if(error)
                                    {
                                        console.log(error);
                                        
                                    }
                                    else
                                    {
                                        
                                        resp=JSON.parse(body);
                                        
                                        if(resp.response.staus==104 || (timer[arg1] != arg2))
                                        {
                                            console.log("clearing interval");
                                            clearInterval(intervalid);
                                        }
                                        else
                                        {
                                            
                                            io.to(roomname).emit("newnotification",resp);
                                        }

                                    }
                                });
}
else
{
    
    clearInterval(intervalid);
}
}
}
}
}
});
});

socket.on('disconnect',function()
{

    if(socket.roomname in names)
    {
        
        ind=names[socket.roomname].indexOf(socket.id) ;
        if(ind != -1)
        {
            names[socket.roomname].splice(ind,1);
            if(names[socket.roomname].length == 0)
            {
                
                timer[socket.roomname]=0;
            }
            
        }
    }
});
});

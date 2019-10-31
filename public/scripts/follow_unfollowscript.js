
/*            -----------------------------THE FOLLOW AND FOLLOWERS SCRIPT ----------------------------------               */




//followers Array stores all users that follows a particular user.
let followers = [
                    {
                                        name: "Celestine Stephen",
                                        Id:  001,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "xyluz",
                                        Id:  002,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "Prof Erons",
                                        Id:  003,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "theresandre",
                                        Id:  004,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    }

];

// This array will  store all list of users, the user is following
let following = [
                    {
                                        name: 'followers here ',
                                        Id:  001,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: 'Celestine Stephen',
                                        Id:  001,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "prof erons",
                                        Id:  002,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "theresandre",
                                        Id:  003,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    },
                    {
                                        name: "xyluz",
                                        Id:  004,
                                        ProfilePic: `<img src="images/profilepic.png" alt="user profile photo"   />`
                    }
];


let unfollowButton = `
<button id = "" class="btn btn-primary " onclick="unfollow(this.id);">Unfollow</button>`;

 function showFollowers(){
                    var result = document.querySelector('#followResult');
                    result.innerHTML = " ";
                    
                   document.querySelector('.followhead').innerHTML = 'PEOPLE FOLLOWING YOU!';

                    for(let i = 0; i < followers.length; i++ ){
                                        let div = document.createElement('div');
                                        div.classList = ' followInDiv ';
                                        div.innerHTML = `<a href="#">${followers[i].ProfilePic} ${followers[i].name}</a>  Is Following You!`; 
                                        result.appendChild(div);


                                        console.log("here works");

                                        /**`${followers[i].ProfilePic} ${followers[i].name}`; */
                    }

                    //for debugging purposes
                   // console.log('this block works');
                    
                    
 }

 function showFollowing(){
                    var result = document.querySelector('#followResult');
                    result.innerHTML = " ";
                    
                    document.querySelector('.followhead').innerHTML = 'PEOPLE YOU ARE FOLLOWING!';
                    let unfollowButton = `
                                        <button id = "" class="btn unfollowBtn btn-primary float-right" 
                                                            onclick="unfollowFollower(this.id);">Unfollow
                                        </button>`;

                    for(let i = 0; i < following.length; i++ ){
                                        let div = document.createElement('div');
                                        div.classList = ' followInDiv ';
                                        div.innerHTML = `<a href="#"> ${following[i].ProfilePic}      ${following[i].name}</a>  ${unfollowButton}`; 
                                        result.appendChild(div);


                                        //console.log("here works");
                    }
                    assignId();

                    //for debugging purposes
                    console.log('this block works');
}


function unfollowFollower(x){
                    let id = `${x}`;
                    let ids = document.getElementById(id);
                    let idnumeber = ids.id ;
                    let re = parseInt(idnumeber);
                    following.splice(re,1);
                    ids.remove();
                
                    assignId();
 }



 function assignId(){
                    let idnum = 0;
                    let followInDiv = document.querySelectorAll('.followInDiv');
                    let unfollowButton = document.querySelectorAll('.unfollowBtn');
                
                    for (let i = 0; i < following.length; i++){
                        following[i].id = idnum;
                        
                        followInDiv[i].id = idnum;
                        unfollowButton[i].id = idnum;
                        idnum ++;
                    }
                
}
document.querySelector('#followers').innerHTML = `${followers.length}+ followers`;
document.querySelector('#following').innerHTML = `${following.length}+ following`;
                 
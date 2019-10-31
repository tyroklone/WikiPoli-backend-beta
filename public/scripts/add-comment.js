const commentURL = "http://teamgandhi.000webhostapp.com/api";
const postId = sessionStorage.getItem("postId");
const commentBtn = document.querySelector("#addComment");

commentBtn.addEventListener("click", () => {
    console.log("clicked")
    const commentBody = document.querySelector("#commentArea").value;

    var form = new FormData();
    form.append("token", sessionStorage.getItem("wikiToken"));
    form.append("comment", commentBody);
    form.append("postId", postId);

    var settings = {
        url: `${commentURL}/comment.php`,
        method: "POST",
        timeout: 0,
        processData: false,
        mimeType: "multipart/form-data",
        contentType: false,
        data: form
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
        console.log(JSON.parse(response))
    })
})


let id = $("input[name*='id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    let id = $("input[name*='id']");
    let gamename = $("input[name*='game_name']");
    let releasedate = $("input[name*='release_date']");
    let price = $("input[name*='price']");

    id.val(textvalues[0]);
    gamename.val(textvalues[1]);
    releasedate.val(textvalues[2]);
    price.val(textvalues[3]);
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}
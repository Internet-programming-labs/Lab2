let activeImage = 0;
let countImages = 5;
let path = "images/galleryImages/";
let countX = 100;
let countY = 1;
let flipTime = 400;
let flipDelay = 400;
let widthImage = 700;
let heightImage = 700;

/*
function generateImage()
{
    let divWidth = 600 / divsCount;
    let imagePath =  path + activeImage + ".jpg";
    for(let i = 0; i < divsCount; i++)
    {
        let item = $("<div></div>");
        item.addClass("elementImage");
        item.css("width", divWidth + "px");
        item.css("background-image", "url(" + imagePath + ")");
        item.css("background-position", -i * divWidth + "px");
        $("#galleryImage").append(item);
    }
}
*/

function generateImage()
{
    $("#galleryImage").css("width", widthImage);
    $("#galleryImage").css("height", heightImage);

    let widthElement = widthImage / countX;
    let heightElement = heightImage / countY;
    let imagePath =  path + activeImage + ".jpg";
    for(let y = 0; y < countY; y++)
        for(let x = 0; x < countX; x++)
        {
            let item = $("<div></div>");
            item.addClass("elementImage");
            item.css("width", widthElement + "px");
            item.css("height", heightElement + "px");
            item.css("background-image", "url(" + imagePath + ")");
            item.css("background-size", widthImage + "px" + " " + heightImage + "px");
            item.css("background-position-x", widthImage - x * widthElement + "px");
            item.css("background-position-y", heightImage - y * heightElement + "px");
            $("#galleryImage").append(item);
        }
}

function mod(value1, value2)
{
    return Math.round((value1 / value2 - Math.floor(value1 / value2)) * (value2));
}

function changeImage()
{
    let i = 0;
    $("#galleryImage div").each(function() {

        let x = mod(i, countX);
        let y = Math.floor(i / countX);
            $(this).slideUp(flipTime + flipDelay * (x / countX), function () {
                $(this).css("background-image", "url('" + path + activeImage + ".jpg')");
                $(this).slideDown(flipTime + flipDelay * (x / countX));
            });
        i++;
    });
}


function flipLeft()
{
    activeImage--;
    if(activeImage < 0)
        activeImage = countImages - 1;
    changeImage();
}

function flipRight()
{
    activeImage++;
    if(activeImage >= countImages)
        activeImage = 0;
    changeImage();
}

$(document).ready(function()
{
    generateImage();
});
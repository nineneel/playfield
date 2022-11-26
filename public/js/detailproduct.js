// product detail
const contentWrapper = document.querySelectorAll("#content-wrapper");
const contentDetailTitle = document.querySelectorAll("#content-detail-title");
const contentDetail = document.querySelectorAll("#content-detail");
const contentIconUp = document.querySelectorAll("#icon-up-content");
const contentIconDown = document.querySelectorAll("#icon-down-content");

contentDetailTitle.forEach((element, it) => {
    element.addEventListener("click", () => {
        // content
        contentDetail[it].classList.toggle("hidden");

        // background
        contentWrapper[it].classList.toggle("bg-green");

        // icon
        contentIconDown[it].classList.toggle("hidden");
        contentIconUp[it].classList.toggle("hidden");

        // border
        if (contentDetail[it].classList.contains("hidden")) {
            contentWrapper[it].classList.remove("border-t-8", "border-green");
        } else {
            contentWrapper[it].classList.add("border-t-8", "border-green");
        }
    });
});

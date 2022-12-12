import "./bootstrap";
feather.replace();

const message_form = document.getElementById("message_form");
const message_input = document.getElementById("message_input");
const conversation = document.getElementById("conversation");
const user = document.getElementById("user_id");

const content_chat = document.getElementById("content_chat");
content_chat.scrollTop = content_chat.scrollHeight;

message_form.addEventListener("submit", function (e) {
    e.preventDefault();

    const options = {
        method: "post",
        url: `/send-message/${user.value}`,
        data: {
            message: message_input.value,
            conversation_id: conversation.value,
        },
    };

    axios(options);
    message_input.value = "";
});

window.Echo.channel("conversation." + conversation.value).listen(
    "Message",
    (data) => {
        const date = new Date(data.message.created_at);
        let element = "";

        if (user.value == data.message.user_id) {
            element = ` <div class="flex gap-1 w-full items-end justify-end">
            <span
            class="font-semibold text-xs">${date.getHours()}:${date.getMinutes()}</span>
            <p class="pl-4 pr-2 py-1 rounded-md border-2 border-orange font-medium">
            ${data.message.message}</p>
            </div>`;
        } else {
            element = `<div class="flex gap-1 w-full items-end">
            <p class="pl-2 pr-4 py-1 bg-orange rounded-md font-medium">${
                data.message.message
            }</p>
            <span
                class="font-semibold text-xs">${date.getHours()}:${date.getMinutes()}</span>
        </div>`;
        }

        content_chat.innerHTML += element;
        newMessage();
    }
);

function newMessage() {
    content_chat.scrollTop = content_chat.scrollHeight;
}

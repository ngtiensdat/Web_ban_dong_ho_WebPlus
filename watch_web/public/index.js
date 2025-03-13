/*const { createClient } = supabase;
const supabaseUrl = "https://scimgaibxvhvhahaaguu.supabase.co";
const supabaseKey =
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InNjaW1nYWlieHZodmhhaGFhZ3V1Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTcyNzU2MjA3NiwiZXhwIjoyMDQzMTM4MDc2fQ.dvtiWacoXncr7NvnB-IR4LGg-GpBRC2E6JtHd1TXXf4";
const _supabase = createClient(supabaseUrl, supabaseKey);

var nav = document.querySelector("#header .container #main-menu");

// localStorage.setItem("user", JSON.stringify({ name: "nguyen khac quang" }));
var user = JSON.parse(localStorage.getItem("user"));

if (user == null || user == "") {
  nav.innerHTML =
    nav.innerHTML +
    `           
<li id="in"><a href="{{ url('/sign-in') }}">Sign in</a>
</li>
<li id="up"><a href="{{ url('/sign-up') }}">Sign up</a>
</li>`;
} else {
  nav.innerHTML =
    nav.innerHTML +
    `            <li class="user">
                <img src="./picture/human.jpg" alt="" />
                <div>
                    <h3 class="user__name">${user.name}</h3>
                    <div class="function">
                    <a href="{{ url('/cart') }}">My Cart</a>
                    <a onClick="logout()">Log Out</a>
                    </div>
                </div>
                </li>`;
}

function logout() {
  localStorage.setItem("user", JSON.stringify(null));
  location.reload();
}
console.log(document.querySelectorAll(".buy-now"));
document.querySelectorAll(".buy-now").forEach((el, i) => {
  el.addEventListener("click", async (e) => {
    e.preventDefault();
    if (user == null || user == "") {
      window.location.href = "{{ url('/sign-in') }}";
    }

    let info = e.target.closest(".product-item").querySelector(".product-inf");
    let name = info.querySelector(".product-name").innerHTML;
    let price = info.querySelector(".product-price").innerHTML;
    let img = e.target
      .closest(".product-item")
      .querySelector(".product-img img")
      .getAttribute("src");

    price = price.substr(1);
    //Gui request len server
    const { data } = await _supabase
      .from("cart")
      .select()
      .eq("userId", user.id)
      .eq("nameProduct", name);

    if (data.length != 0) {
      let quan = data[0].quantity;
      await _supabase
        .from("cart")
        .update({ quantity: quan + 1 })
        .eq("userId", user.id)
        .eq("nameProduct", name);
    } else {
      let { error } = await _supabase.from("cart").insert({
        userId: user.id,
        nameProduct: name,
        price: price,
        quantity: 1,
        img: img,
      });
    }

    window.location.href = "{{ url('/cart') }}";
  });
});

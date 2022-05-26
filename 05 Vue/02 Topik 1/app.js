var dataProduct = {
  maximum: 50000,
  products: [
    {
      id: "429",
      name: "Server Discord Comunity Edition",
      description:
        "    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima inventore est pariatur explicabo similique cum. Culpa, inventore! Dolores ipsam repudiandae alias est autem ex beatae, modi commodi veniam quae.",
      price: "40000",
      image: "../../image/Listing.png",
    },
    {
      id: "430",
      name: "Server Discord Shop Edition",
      description:
        "    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima inventore est pariatur explicabo similique cum. Culpa, inventore! Dolores ipsam repudiandae alias est autem ex beatae, modi commodi veniam quae.",
      price: "45000",
      image: "../../image/Server Discord Shop.png",
    },
    {
      id: "431",
      name: "Server Discord Youtube Edition",
      description:
        "    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima inventore est pariatur explicabo similique cum. Culpa, inventore! Dolores ipsam repudiandae alias est autem ex beatae, modi commodi veniam quae.",
      price: "55000",
      image: "../../image/Server Discord Youtube.png",
    },
  ],
};

var app = new Vue({
  el: "#app",
  data: dataProduct,
});

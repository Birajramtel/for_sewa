new TypeIt("#services", {
    speed: 100,
    waitUntilVisible: true,
    loop: true,
  })
    .type(" Import and Export")
    .pause(600)
    .delete(17)
    .type(" Hardware")
    .pause(600)
    .delete(8)
    .type(" Real Estate")
    .pause(500)
    .delete(11)
    .type(" Foods and Grains")
    .pause(600)
    .delete(16)
    .type(" Constructions")
    .pause(500)
    .delete(13)
    .type(" Machineries",{ delay: 600 })
    .pause(600)
    .delete(11)
    .type(" IT Services")
    .pause(600)
    .delete(11)
    .type(" Electronics")
    .pause(600)
    .delete(11)
    .type(" Fashion Hub")
    .pause(600)
    .delete(11)
    .go();
   
import Layout from "../Layout/Layout";

function About() {
  return (
    <>
      <h4 className="p-2 bg-title rounded">About</h4>
      <p className="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam natus rem, deserunt minima veniam repellat at labore, iure quam cumque quas amet rerum magnam quo dolores molestiae! Placeat, tempore cupiditate.
      Pariatur voluptatem id adipisci, reprehenderit totam sint aliquid ipsum mollitia recusandae dignissimos! Praesentium quisquam ipsum doloribus? Maiores ipsa, numquam consequatur quis, aut at dolore commodi minima fuga, consequuntur debitis sint!
      Repellendus ex, molestias quo optio repudiandae consectetur reprehenderit ab officia atque culpa assumenda aspernatur aliquam veniam error laboriosam maxime facilis recusandae cum consequuntur laborum placeat in. Consectetur porro dolore asperiores.</p>
    </>
  );
}

About.layout = page => <Layout children={page}/>

export default About;
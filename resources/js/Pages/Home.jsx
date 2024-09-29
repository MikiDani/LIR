import Layout from "../Layout/Layout";

function Home({name}) {
  return (
    <>
      <h1 className="title">Home</h1>
      <p className="p-1 bg-light">Helló {name}</p>
    </>
  );
}

Home.layout = page => <Layout children={page} />

export default Home;
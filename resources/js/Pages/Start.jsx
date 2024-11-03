import React, { useEffect } from 'react';
import Layout from '../Layout/Layout';

function Start({ pagename }) {

    useEffect(() => {
        let element = document.getElementById("center-container");
        if (element) {
          if (pagename == 'start') {
            element.classList.add('start-style');
          } else {
            element.classList.remove('start-style');
          }
        }
    }, [pagename]);

  return (
    <>
    </>
  );
}

Start.layout = page => <Layout children={page} />;

export default Start;

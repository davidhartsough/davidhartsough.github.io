module.exports = {
  siteMetadata: {
    siteUrl: `http://blog.davidhartsough.com`,
  },
  plugins: [
    'gatsby-plugin-react-helmet',
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `essays`,
        path: `${__dirname}/essays/`,
      },
    },
    {
      resolve: `gatsby-transformer-remark`,
      options: {
        plugins: [
          {
            resolve: "gatsby-remark-external-links",
            options: {
              target: "_blank",
              rel: null
            }
          }
        ]
      }
    },
    {
      resolve: "gatsby-plugin-google-analytics",
      options: {
        trackingId: "UA-51999116-1"
      }
    },
    {
      resolve: "gatsby-plugin-manifest",
      options: {
        name: "David Hartsough's Writings",
        short_name: "David Hartsough's Writings",
        description: "David Hartsough is a happy human who loves discussing the philosophy and psychology of flourishing, connectedness, and identity.",
        start_url: "/",
        background_color: "#f9fafa",
        theme_color: "#198BED",
        display: "minimal-ui",
        icons: [
          {
            src: "/icon-192x192.png",
            sizes: "192x192",
            type: "image/png"
          },
          {
            src: "/icon-512x512.png",
            sizes: "512x512",
            type: "image/png"
          }
        ]
      }
    },
    "gatsby-plugin-sitemap",
    'gatsby-plugin-catch-links',
    "gatsby-plugin-offline",
  ],
};

import facebook4j.Comment;
import facebook4j.Facebook;
import facebook4j.FacebookException;
import facebook4j.FacebookFactory;
import facebook4j.PagableList;
import facebook4j.Post;
import facebook4j.Reading;
import facebook4j.ResponseList;
import facebook4j.auth.AccessToken;

public class facebook {

/**
 * A simple Facebook4J client which
 * illustrates how to access group feeds / posts / comments.
 * 
 * @param args
 * @throws FacebookException 
 */
public static void main(String[] args) throws FacebookException {

    // Generate facebook instance.
    Facebook facebook = new FacebookFactory().getInstance();
    // Use default values for oauth app id.
    facebook.setOAuthAppId("187887548411903", "707352f8c722649e861aa503bd5d5d41");
    // Get an access token from: 
    // https://developers.facebook.com/tools/explorer
    // Copy and paste it below.
    String accessTokenString = "EAACq4fqUrZC8BANJp7kaX0yyRrhDdBqCiVw0FxZCO0ATINrZCNyDYTKBdDjCMiu1RAw8ULn32rpadYzwerk4bRIbt7NQ50M4cuRNffIX8bvQCGcZBetG3OVS5ReHWN3v3ZCdaTtfP1CsxsmmmqzTuDVm4OThVfhlELIt27i4ykh7gtWJ3XxTd5qBzMLV7ywcZD";
    AccessToken at = new AccessToken(accessTokenString);
    // Set access token.
    facebook.setOAuthAccessToken(at);

    // We're done.
    // Access group feeds.
    // You can get the group ID from:
    // https://developers.facebook.com/tools/explorer

    // Set limit to 25 feeds.
   facebook.postStatusMessage("Hello World from Facebook4J.");
    }
}